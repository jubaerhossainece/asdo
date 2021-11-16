<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodDonation;
use Illuminate\Support\Facades\DB;

class BloodDonationController extends Controller
{
    public function index($id){
        $events = BloodDonation::where('blood_donor_id', $id)
                    ->orderBy('date', 'DESC')
                    ->get();
        $user = DB::table('blood_donors')->where('id', $id)
                ->select('id', 'name')
                ->first();

        return view('admin.bloodDonors.donations.index', compact('events', 'user'));
    }

    public function create($id){
        $user = DB::table('blood_donors')->where('id', $id)
                ->select('id', 'name')
                ->first();

        return view('admin.bloodDonors.donations.create', compact('user'));
    }

    public function store(Request $request, $id){
        $request->validate([
            'address' => 'required|string',
            'date' => 'required'
        ]);

        $instance = new BloodDonation();
        $instance->blood_donor_id = $id;
        $instance->address = $request->address;
        $instance->date = $request->date;
        $result = $instance->save();
        if($result){
            return redirect()->route('asdo.blood-donor.events.index', $id)->with('success', 'Data successfully added!');
        }else{
            return redirect()->back()->with('danger', 'Something went wrong!');
        }
    }

    public function edit($id, $d_id){
        $event = BloodDonation::where('id', $d_id)
        ->first();

        $user = DB::table('blood_donors')->where('id', $id)
            ->select('id', 'name')
            ->first();

            return view('admin.bloodDonors.donations.edit', compact('user', 'event'));
        
    }

    public function update(Request $request, $id){
        $request->validate([
            'address' => 'required|string',
            'date' => 'required'
        ]);
        $instance = BloodDonation::find($id);
        $instance->address = $request->address;
        $instance->date = $request->date;
        $result = $instance->save();
        if($result){
            return redirect()->route('asdo.blood-donor.events.index', $instance->blood_donor_id)->with('success', 'Data successfully updated!');
        }else{
            return redirect()->back()->with('danger', 'Something went wrong!');
        }
    }

    public function destroy($id){
        $b_donation = BloodDonation::find($id);
        $result = $b_donation->delete();
        return redirect()->back();
    }
}
