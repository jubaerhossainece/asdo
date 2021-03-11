<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

class AdminController extends Controller
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
        $roles = Role::all(); 
        $admins = DB::table('users')->where('role_id', '!=', 4)->get();
        return view('backend.admins.index', compact('admins', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name','!=', 'User')->get();

        return view('backend.admins.create', compact('roles'));
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
            'password' => 'required|min:8|string|confirmed'
        ]);

        if($request->role_id == 0) {
            $request->session()->flash('alert-danger', 'Please select a role for this account!');
            return redirect()->route('asdo.admins.create');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => false,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password)
        ]);

        $roles = Role::all();

        foreach($roles as $role){
            if($role->id == $request->role_id){
                $newAdmin = $role->name;
            }
        }
        
        if($user){
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
