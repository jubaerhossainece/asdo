<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class AdminProfileController extends Controller
{
    public function __construct(){ 
        $this->middleware('preventBackHistory');
    }

    
	public function show(){
		$user = Auth::user();
        $blood_groups = DB::table('others')->where('id', $user->blood_group)->get();
        $member_types = DB::table('others')->where('id', $user->member_type)->get();
        $religions = DB::table('others')->where('id', $user->religion)->get();
        $roles = Role::all();

        foreach($roles as $role){
            if($role->id == $user->role_id){
                $roleName = $role->name;
            }
        }

        return view('admin.profile.show', compact('user', 'roleName', 'blood_groups', 'member_types', 'religions'));
	}


    public function edit(){
    	$blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $member_types = DB::table('others')->where('category', 'member type')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();

    	$user = Auth::user();

    	return view('admin.profile.edit', compact('user', 'blood_groups', 'member_types', 'religions'));
    }



    public function update(Request $request){
        
        $user = Auth::user();

        $user->fill($request->all());

        if(!$user->isDirty()){
            $request->session()->flash('alert-danger', 'No data change has been made!');
            return redirect()->route('asdo.profile.edit');
        }
    
    	$request->validate([
            'name' => 'required|string',
            'email' => ['required',Rule::unique('users')->ignore(Auth::user()->id)],
            'password' => 'sometimes|min:8|string|confirmed',
            'photo' => 'nullable|image'
        ]);
   
        if($request->hasFile('photo')){
            $path = 'public/asdo/images/admins/';
            $file= $request->file('photo');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'image'.time().'.'.$extension;
    
            $request->file('photo')->storeAs($path, $filename_with_ext);   
            Storage::delete('public/asdo/images/admins/'.$user->photo);
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->guardian = $request->guardian;
        $user->mother = $request->mother; 
        // $user->role_id = isset($request->role_id) ? $request->role_id : $user->role_id; 
        $user->phone = $request->phone; 
        $user->nid = $request->nid;
        $user->birth_id = $request->birth_id;
        $user->blood_group = $request->blood_group;
        $user->nationality = $request->nationality;
        $user->member_type = $request->member_type;
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->photo = isset($filename_with_ext) ? $filename_with_ext : $user->photo;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        // $user->password = isset($request->password) ? $request->password : $user->password;

        $result = $user->save();

        if($result){
            $request->session()->flash('alert-success', 'Your profile has been updated successfully!');
            return redirect()->route('asdo.profile.show');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.profile.edit');
        }
    }
}