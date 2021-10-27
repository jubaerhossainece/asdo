<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function __construct(){ 
        $this->middleware('preventBackHistory');
        $this->middleware('auth'); 
    }


    public function edit(){
    	return view('user.member-password.edit');
    }


    public function changePassword(Request $request){
    	$this->validate($request, [
    		'current_password' => 'required|min:6',
    		'password' => 'required|confirmed|min:6',
    		'password_confirmation' => 'required'
    	]);

    	$user = Auth::user();
    	$old_pass = $user->password;

    	if(Hash::check($request->current_password, $old_pass)){
    		if(Hash::check($request->password, $old_pass)){
    			$request->session()->flash('alert-danger', 'You entered an old password!');
    			return redirect()->back();
    		}else{
    			// $user->update([
    			// 	'password' => Hash::make($request->password)
    			// ]);  
				
                $user->password = Hash::make($request->password);
                $user->save();
				return redirect()->route('member.profile.show')->with('alert-success', 'Password updated successfully!'); 				
    		}
    	}
    	
    	$request->session()->flash('alert-danger', 'Your current password does not match!');
    	return redirect()->back();
    }
}
