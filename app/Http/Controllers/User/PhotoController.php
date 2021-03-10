<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
	public function editPhoto(){
		return view('user.profile.image');
	}

  public function updatePhoto(){

  }
}
