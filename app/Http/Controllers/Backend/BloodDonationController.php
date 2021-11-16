<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BloodDonation;
use Illuminate\Support\Facades\DB;

class BloodDonationController extends Controller
{
    public function index($id){
        $events = BloodDonation::where('blood_donor_id', $id)->get();
        $user = DB::table('blood_donors')->where('id', $id)
                ->select("name")
                ->first();

        return view('admin.bloodDonors.donations.index', compact('events', 'user'));
    }
}
