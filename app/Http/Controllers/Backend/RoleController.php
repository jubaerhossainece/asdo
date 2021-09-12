<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
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
        Gate::authorize('app.roles.index');
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.roles.create');
        $modules = Module::all();
        return view('admin.roles.form', compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.roles.create');
        $this->validate($request, [
            'name' => 'required|unique:roles|string',
            'permissions' => 'required|array',
            'permissions.*' => 'integer'
        ]);

        $role = new Role;

        $role->name = $request->name;
        $role->slug = Str::slug($request->name);

        $result = $role->save();

        $role->permissions()->sync($request->input('permissions', []));


        if($result){
            $request->session()->flash('alert-success', $request->name.' role has been added to admin panel!');
            return redirect()->route('asdo.roles.index');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.roles.create');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.roles.edit');
        $role = Role::findOrFail($id);
        $modules = Module::all();
        return view('admin.roles.form', compact('modules', 'role'));
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
        Gate::authorize('app.roles.edit');
        $role = Role::findOrFail($id);
        $this->validate($request, [
            'name' => ['required', Rule::unique('roles')->ignore($role->id), 'string'],
            'permissions' => 'required|array',
            'permissions.*' => 'integer'
        ]);

        $role->name = $request->name;
        $role->slug = Str::slug($request->name);
        $role->permissions()->sync($request->input('permissions'));

        $result = $role->save();
        if($result){
            $request->session()->flash('alert-success', $request->name.' role has been updated successfully!');
            return redirect()->route('asdo.roles.index');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.roles.create');
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
        Gate::authorize('app.roles.destroy');
        $role = Role::findOrFail($id);
        $result = $role->delete();

         if($result){
            return redirect()->route('asdo.roles.index')->with('alert-success', $role->name.' role has been deleted successfully!');
        }else{
            return redirect()->route('asdo.roles.create')->with('alert-danger', 'Something went wrong!');
        }
    }
}
