<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BloodDonor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class BloodDonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.bloodDonors.index');

        $users = DB::table('blood_donors')->get();     
        
        return view('admin.bloodDonors.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.bloodDonors.create');

        $blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();

        return view('admin.bloodDonors.create', compact('blood_groups', 'religions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.bloodDonors.create');

        //check if email and phone number both fields are empty
        if(!isset($request->email) && !isset($request->phone)){
            $request->session()->flash('alert-danger', 'Both email and phone number fields are empty. Please fill at least one!');
            return redirect()->back();
        }
    
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'email|email:rfc,dns',
            'password' => 'required|min:6|string',
            'facebook_id' => 'nullable',
            'photo' => 'nullable|image',
        ]);


        //naming and storing photo 
        if($request->hasFile('photo')){
            $path = 'public/asdo/images/bloodDonors';
            $file= $request->file('photo');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'bDonor'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);    
        }

        $user = new BloodDonor;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->photo = isset($filename_with_ext) ? $filename_with_ext : null;
        $user->father = $request->father;
        $user->mother = $request->mother; 
        $user->spouse = $request->spouse; 
        $user->gender = $request->gender; 
        $user->nid = $request->nid;
        $user->birth_id = $request->birth_id;
        $user->blood_group = $request->blood_group;
        $user->nationality = $request->nationality;
        $user->religion = $request->religion;
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->birth_date = $request->birth_date;

        $result = $user->save();

        if($result){
            $request->session()->flash('alert-success', 'Blood donor profile has been created successfully!');
            return redirect()->route('asdo.bloodDonors.show', $user->id);
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('app.bloodDonors.show');

        $user = BloodDonor::findOrFail($id);
        $blood_group = DB::table('others')
                        ->where('id', $user->blood_group)
                        ->select('name')
                        ->get();
        $religion = DB::table('others')
                    ->where('id', $user->religion)
                    ->select('name')
                    ->get(); 

        return view('admin.bloodDonors.show', compact('user', 'blood_group', 'religion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.bloodDonors.edit');

        $blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();
        $user = BloodDonor::findOrFail($id);

        return view('admin.bloodDonors.edit' , compact('user', 'blood_groups', 'religions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Gate::authorize('app.bloodDonors.edit');
        $user = BloodDonor::findOrFail($id);
        //before $user->fill make sure you stored required $user data
        $photo = $user->photo;

        $user->fill($request->all());   

        //check if any field is changed
        if(!$user->isDirty()){
            $request->session()->flash('alert-danger', 'No data change has been made!');
            return redirect()->back();
        }

        $request->validate([
            'name' => 'required|string',
            'email' => ['nullable', 'email']
        ]);


        //naming and storing photo 
        if($request->hasFile('photo')){   
            $path = 'public/asdo/images/bloodDonors';
            $file= $request->file('photo');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'image'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);  
            Storage::delete('public/asdo/images/bloodDonors/'.$photo);  
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->father = $request->father;
        $user->mother = $request->mother; 
        $user->spouse = $request->spouse; 
        $user->gender = $request->gender; 
        $user->nid = $request->nid;
        $user->birth_id = $request->birth_id;
        $user->blood_group = $request->blood_group;
        $user->nationality = $request->nationality;
        $user->religion = $request->religion;
        $user->photo = isset($filename_with_ext) ? $filename_with_ext : $photo;
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->birth_date = $request->birth_date;

        $result = $user->save();

        if($result){
            $request->session()->flash('alert-success', 'Member profile has been updated successfully!');
            return redirect()->route('asdo.bloodDonors.show', $user->id);
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('app.bloodDonors.destroy');

        $user = BloodDonor::findOrFail($id);
        if(isset($user->photo)){
            Storage::delete('public/asdo/images/bloodDonors/'.$user->photo);            
        }

        $user->delete();

        return redirect()->route('asdo.bloodDonors.index')->with('alert-success', 'User information removed from database!');
    }
}
