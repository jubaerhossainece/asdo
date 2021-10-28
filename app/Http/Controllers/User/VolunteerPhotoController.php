<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Volunteer;

class VolunteerPhotoController extends Controller
{
    public function edit(){
        $user = Auth::user();
        return view('user.volunteer-profile.image', compact('user'));
    }



  public function update(Request $request){
    $user = Auth::user();
    
    $img = $request->validate([
        'photo' => 'nullable|image'
    ]);

    if($request->hasFile('photo')){
        $path = 'public/asdo/images/volunteers';
        $file= $request->file('photo');
        $image_name = $file->getClientOriginalName();
        $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $filename_with_ext = 'member'.time().'.'.$extension;
        $request->file('photo')->storeAs($path, $filename_with_ext);  
        Storage::delete('public/asdo/images/volunteers/'.$user->photo);  
    }

    $user->photo = isset($filename_with_ext) ? $filename_with_ext : $user->photo;
    $result = $user->save();

    if($result){
        $request->session()->flash('alert-success', 'Your profile photo updated successfully!');
        return redirect()->route('volunteer.profile.show', compact('user'));
    }else{
        $request->session()->flash('alert-danger', 'Something went wrong!');
        return redirect()->route('volunteer.photo.edit');
    }
  }
}
