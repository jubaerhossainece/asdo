<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdminPhotoController extends Controller
{
  public function __construct(){ 
      $this->middleware('preventBackHistory');
  }

  
	public function editPhoto(){
		$user = Auth::user();
		return view('admin.profile.image', compact('user'));
	}



  public function updatePhoto(Request $request){
  	$user = Auth::user();
  	$img = $request->validate([
        'photo' => 'nullable|image'
    ]);

  	if($request->hasFile('photo')){
        $path = 'public/asdo/images';
        $file= $request->file('photo');
        $image_name = $file->getClientOriginalName();
        $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filename_with_ext = 'image'.time().'.'.$extension;
        $request->file('photo')->storeAs($path, $filename_with_ext); 
            Storage::delete('public/asdo/images/'.$user->photo);    
    }

    $user->photo = isset($filename_with_ext) ? $filename_with_ext : $user->photo;
    $result = $user->save();

    if($result){
        $request->session()->flash('alert-success', 'Your profile photo updated successfully!');
        return redirect()->route('asdo.profile.show', compact('user'));
    }else{
        $request->session()->flash('alert-danger', 'Something went wrong!');
        return redirect()->route('asdo.photo.edit');
    }
  }
}
