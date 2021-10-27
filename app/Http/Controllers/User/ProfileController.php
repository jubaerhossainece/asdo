<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct(){ 
        $this->middleware('preventBackHistory');
        $this->middleware('auth'); 
    }

    
	public function show(){
		$user = Auth::user();

        $blood_groups = DB::table('others')->where('id', $user->blood_group)->get();
        $member_types = DB::table('others')->where('id', $user->member_type)->get();
        $religions = DB::table('others')->where('id', $user->religion)->get();
        return view('user.member-profile.show', compact('user', 'blood_groups', 'member_types', 'religions'));
	}


    public function edit(){
    	$blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $member_types = DB::table('others')->where('category', 'member type')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();

    	$user = Auth::user();

    	return view('user.member-profile.edit', compact('user', 'blood_groups', 'member_types', 'religions'));
    }



    public function update(Request $request){
        
        $user = Auth::user();

        $user->fill($request->all());   

        //check if any field is changed
        if(!$user->isDirty()){
            $request->session()->flash('alert-danger', 'No data change has been made!');
            return redirect()->route('member.profile.edit');
        }

        //check if email and phone number both fields are empty
        if(!isset($request->email) && !isset($request->phone)){
            $request->session()->flash('alert-danger', 'Both email and phone number fields are empty. Please fill at least one!');
            return redirect()->route('member.profile.edit');
        }
    
    	$request->validate([
            'name' => 'required|string',
            'email' => ['nullable', 'email', Rule::unique('users')->ignore(Auth::user()->id)],
            'phone' => ['nullable', Rule::unique('users')->ignore(Auth::user()->id)]
        ]);

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
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->birth_date = $request->birth_date;

        $result = $user->save();

        if($result){
            $request->session()->flash('alert-success', 'Your profile has been updated successfully!');
            return redirect()->route('member.profile.show');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('member.profile.edit');
        }
    }
}
