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
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.members.index');

        $member_types = DB::table('others')
                                ->where('category', 'member type')
                                ->select('id', 'name')
                                ->get();      
        $users = DB::table('users')->get();  
        
        return view('admin.members.index', compact('users', 'member_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.members.create');

        $blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $member_types = DB::table('others')->where('category', 'member type')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();

        return view('admin.members.create', compact('blood_groups', 'member_types', 'religions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.members.create');

        //check if email and phone number both fields are empty
        if(!isset($request->email) && !isset($request->phone)){
            $request->session()->flash('alert-danger', 'Both email and phone number fields are empty. Please fill at least one!');
            return redirect()->back();
        }
    
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|email|email:rfc,dns|unique:users,email|max:200',
            'phone' => 'nullable|unique:users,phone|max:20',
            'password' => 'required|min:6|string',
            'facebook_id' => 'nullable',
            'photo' => 'nullable|image',
        ]);


        //naming and storing photo 
        if($request->hasFile('photo')){
            $path = 'public/asdo/images/members';
            $file= $request->file('photo');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'member'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);    
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->photo = isset($filename_with_ext) ? $filename_with_ext : null;
        $user->father = $request->father;
        $user->mother = $request->mother; 
        $user->spouse = $request->spouse; 
        $user->gender = $request->gender; 
        $user->nid = $request->nid;
        $user->birth_id = $request->birth_id;
        $user->blood_group = $request->blood_group;
        $user->nationality = $request->nationality;
        $user->religion = $request->religion;
        $user->member_type = $request->member_type;
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->birth_date = $request->birth_date;

        $result = $user->save();

        if($result){
            $request->session()->flash('alert-success', 'Member profile has been created successfully!');
            return redirect()->route('asdo.members.show', $user->id);
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->back();
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
        Gate::authorize('app.members.show');

        $user = User::findOrFail($id);
        $blood_group = DB::table('others')
                        ->where('id', $user->blood_group)
                        ->select('name')
                        ->get();
        $religion = DB::table('others')
                    ->where('id', $user->religion)
                    ->select('name')
                    ->get();
        $member_type = DB::table('others')
                    ->where('id', $user->member_type)
                    ->select('name')
                    ->get();            

        return view('admin.members.show', compact('user', 'blood_group', 'member_type', 'religion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.members.edit');

        $blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $member_types = DB::table('others')->where('category', 'member type')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();
        $user = User::findOrFail($id);

        return view('admin.members.edit' , compact('user', 'blood_groups', 'member_types', 'religions'));
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
        Gate::authorize('app.members.edit');

        //$user->fill() fills up the $user data with $request object data
        //so we need to query again to obtain the user data from database or store itin another variable
        $photo = $user->photo;
        $user->fill($request->all());   

        //check if any field is changed
        if(!$user->isDirty()){
            $request->session()->flash('alert-danger', 'No data change has been made!');
            return redirect()->back();
        }

        //check if email and phone number both fields are empty
        if(!isset($request->email) && !isset($request->phone)){
            $request->session()->flash('alert-danger', 'Both email and phone number fields are empty. Please fill at least one!');
            return redirect()->back();
        }
    
        $request->validate([
            'name' => 'required|string',
            'email' => ['nullable','email','email:rfc,dns',Rule::unique('users')->ignore($user->id)],
            'phone' => ['nullable',Rule::unique('users')->ignore($user->id)]
        ]);


        //naming and storing photo 
        if($request->hasFile('photo')){   
            $path = 'public/asdo/images/members';
            $file= $request->file('photo');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'member'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);  
            Storage::delete('public/asdo/images/members/'.$photo);  
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->father = $request->father;
        $user->mother = $request->mother; 
        $user->spouse = $request->spouse; 
        $user->gender = $request->gender; 
        $user->nid = $request->nid;
        $user->birth_id = $request->birth_id;
        $user->blood_group = $request->blood_group;
        $user->nationality = $request->nationality;
        $user->religion = $request->religion;
        $user->photo = isset($filename_with_ext) ? $filename_with_ext : $photo;
        $user->member_type = $request->member_type;
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->birth_date = $request->birth_date;

        $result = $user->save();

        if($result){
            $request->session()->flash('alert-success', 'Member profile has been updated successfully!');
            return redirect()->route('asdo.members.show', $user->id);
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->back();
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
        Gate::authorize('app.members.destroy');

        $user = User::findOrFail($id);
        if(isset($user->photo)){
            Storage::delete('public/asdo/images/members/'.$user->photo);            
        }

        $user->delete();

        return redirect()->route('asdo.members.index')->with('alert-success', 'User information removed from database!');
    }
}
