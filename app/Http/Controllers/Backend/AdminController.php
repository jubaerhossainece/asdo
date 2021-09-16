<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\Role;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function __construct() 
    { 
        $this->middleware('preventBackHistory');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.admins.index');
        $roles = Role::all(); 
        $admins = DB::table('admins')->get();
        return view('admin.admins.index', compact('admins', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.admins.create');
        $roles = Role::where('name','!=', 'User')->get();

        return view('admin.admins.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.admins.create');
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email|max:200',
            'password' => 'required|min:8|string|confirmed'
        ]);

        if($request->role_id == 0) {
            $request->session()->flash('alert-danger', 'Please select a role for this account!');
            return redirect()->route('asdo.admins.create');
        }

        $user = new Admin;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role_id = $request->role_id;
        $user->password = Hash::make($request->password);
        $result = $user->save();

        $roles = Role::all();

        foreach($roles as $role){
            if($role->id == $request->role_id){
                $newAdmin = $role->name;
            }
        }
        
        if($result){
            $request->session()->flash('alert-success', 'New '.$newAdmin.' has been added to the admin panel!');
            return redirect()->route('asdo.admins.index');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.admins.create');
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
        Gate::authorize('app.admins.show');
        $user = Admin::findOrFail($id);

        $blood_groups = DB::table('others')->where('id', $user->blood_group)->get();
        $religions = DB::table('others')->where('id', $user->religion)->get();

        $roles = Role::all();

        foreach($roles as $role){
            if($role->id == $user->role_id){
                $roleName = $role->name;
            }
        }
        return view('admin.admins.show', compact('user', 'roleName', 'blood_groups', 'religions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.admins.edit');
        $roles = Role::all(); 
        $blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();
        $user = Admin::findOrFail($id);

        return view('admin.admins.edit', compact('user', 'blood_groups', 'roles', 'religions'));
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
        Gate::authorize('app.admins.edit');
        $user = Admin::findOrFail($id);
        $user->fill($request->all());

        if(!$user->isDirty()){
            $request->session()->flash('alert-danger', 'No data change has been made!');
            return redirect()->route('asdo.admins.edit', $user->id);
        }

        $request->validate([
            'name' => 'required|string',
            'email' => ['required',Rule::unique('users')->ignore($user->id)],
            'password' => 'sometimes|min:8|string|confirmed',
            'photo' => 'nullable|image'
        ]);

        if($request->hasFile('photo')){
            
            $path = 'public/asdo/images/admins';
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
        $user->father = $request->father;
        $user->mother = $request->mother; 
        $user->husband = $request->husband; 
        $user->role_id = isset($request->role_id) ? $request->role_id : $user->role_id; 
        $user->phone = $request->phone; 
        $user->nid = $request->nid;
        $user->gender = $request->gender; 
        $user->birth_id = $request->birth_id;
        $user->blood_group = $request->blood_group;
        $user->nationality = $request->nationality;
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->photo = isset($filename_with_ext) ? $filename_with_ext : $user->photo;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->birth_date = $request->birth_date;
        // $user->password = isset($request->password) ? $request->password : $user->password;
        $result = $user->save();
        
        if($result){
            $request->session()->flash('alert-success', 'User information updated successfully!');
            return redirect()->route('asdo.admins.show', $user->id);
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.admins.show', $user->id);
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
        Gate::authorize('app.admins.destroy');
        $user = Admin::findOrFail($id);
        Storage::delete('public/asdo/images/admins/'.$user->photo);  

        $user->delete();

        return redirect()->route('asdo.admins.index')->with('alert-success', "Admin information removed from admin panel!");
    }
}
