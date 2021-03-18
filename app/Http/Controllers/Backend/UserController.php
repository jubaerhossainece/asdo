<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct() 
    { 
        $this->middleware('preventBackHistory');
        $this->middleware('auth'); 
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->where('role_id', '=', '1')->get();
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $member_types = DB::table('others')->where('category', 'member type')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();

        return view('backend.users.create', compact('blood_groups', 'member_types', 'religions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email|max:200',
            'password' => 'required|min:8|string|confirmed',
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
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'guardian' => $request->guardian,
            'mother' => $request->mother,
            'phone' => $request->phone,
            'nid' => $request->nid,
            'birth_id' => $request->birth_id,
            'blood_group' => $request->blood_group,
            'nationality' => $request->nationality,
            'member_type' => $request->member_type,
            'facebook_id' => $request->facebook_id,
            'religion' => $request->religion,
            'education' => $request->education,
            'photo' => isset($filename_with_ext) ? $filename_with_ext : '',
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address,
            'password' => Hash::make($request->password)
        ]);

        if($user){
            $request->session()->flash('alert-success', 'User was created successfully!');
            return redirect()->route('asdo.users.show', $user->id);
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.users.create');
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
        $user = User::findOrFail($id);
        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $member_types = DB::table('others')->where('category', 'member type')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();
        $user = User::findOrFail($id);

        return view('backend.users.edit' , compact('user', 'blood_groups', 'member_types', 'religions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->fill($request->all());

        if(!$user->isDirty()){
            $request->session()->flash('alert-danger', 'No data change has been made!');
            return redirect()->route('asdo.users.edit', $user->id);
        }

        $request->validate([
            'name' => 'required|string',
            'email' => ['required',Rule::unique('users')->ignore($user->id)],
            'password' => 'sometimes|min:8|string|confirmed',
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

        $result = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'guardian' => $request->guardian,
            'mother' => $request->mother,
            'phone' => $request->phone,
            'nid' => $request->nid,
            'birth_id' => $request->birth_id,
            'blood_group' => $request->blood_group,
            'nationality' => $request->nationality,
            'member_type' => $request->member_type,
            'facebook_id' => $request->facebook_id,
            'religion' => $request->religion,
            'education' => $request->education,
            'password' => isset($request->password) ? Hash::make($request->password) : $user->password,
            'photo' => isset($filename_with_ext) ? $filename_with_ext : $user->photo,
            'present_address' => $request->present_address,
            'permanent_address' => $request->permanent_address
        ]);

        if($result){
            $request->session()->flash('alert-success', 'User information updated successfully!');
            return redirect()->route('asdo.users.show', $user->id);
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.users.show', $user->id);
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
        $user->delete();

        return redirect()->route('asdo.users.index')->with('alert-success', 'User information removed from database!');
    }
}
