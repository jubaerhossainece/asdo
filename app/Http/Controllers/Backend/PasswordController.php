<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PasswordController extends Controller
{
    public function edit(){
    	return view('backend.password.edit');
    }

    public function update(Request $request){

    	$this->validate($request, [
    		'current_password' => 'required|min:8',
    		'password' => 'required|confirmed|min:8',
    		'password_confirmation' => 'required'
    	]);

    	$user = Auth::user();

    	$old_pass = $user->password;

    	if(Hash::check($request->current_password, $old_pass)){
    		if(Hash::check($request->password, $old_pass)){
    			$request->session()->flash('alert-danger', 'You entered an old password!');
    			return redirect()->back();
    		}else{
    			$user->update([
    				'password' => Hash::make($request->password)
    			]);
    				Auth::logout();   
    				
    				return redirect('/login')->with('alert-success', 'Password updated successfully! You are logged out. Please login with new password!'); 				
    		}
    	}
    	
    	$request->session()->flash('alert-danger', 'Your current password does not match!');
    	return redirect()->back();
    }
}
