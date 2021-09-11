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
        $users = DB::table('users')
                ->where('user_type', '=', 'member')
                ->get();
        return view('admin.users.index', compact('users'));
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

        return view('admin.users.create', compact('blood_groups', 'member_types', 'religions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        //determine if email is unique
        if(!empty($request->email)){
            $uniqueEmail = User::where('email', $request->email)
                            ->where('user_type', $request->user_type)
                            ->select('id')
                            ->first();
            
            if($uniqueEmail){
                return redirect()->back()->with('alert-danger', 'Email address has already been taken by another account!');
            }                 
        }


        //determine if phone number is unique
        if(!empty($request->phone)){
            $uniquePhone = User::where('phone', $request->phone)
                            ->where('user_type', $request->user_type)
                            ->select('id')
                            ->first();

            if($uniquePhone){
                return redirect()->back()->with('alert-danger', 'Phone number has already been taken by another account!');
            }           
        }

        //check if email and phone number both fields are empty
        if(!isset($request->email) && !isset($request->phone)){
            $request->session()->flash('alert-danger', 'Both email and phone number fields are empty. Please fill at least one!');
            return redirect()->back();
        }
    
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'email',
            'password' => 'required|min:6|string',
            'facebook_id' => 'nullable',
            'photo' => 'nullable|image',
            'member_type' => 'required'
        ]);


        //naming and storing photo 
        
        if($request->hasFile('photo')){
            $path = 'public/asdo/images';
            $file= $request->file('photo');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'image'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);    
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->photo = isset($filename_with_ext) ? $filename_with_ext : null;
        $user->father = $request->father;
        $user->mother = $request->mother; 
        $user->husband = $request->husband; 
        $user->gender = $request->gender; 
        $user->nid = $request->nid;
        $user->birth_id = $request->birth_id;
        $user->blood_group = $request->blood_group;
        $user->nationality = $request->nationality;
        $user->religion = $request->religion;
        $user->member_type = $request->member_type;
        $user->user_type = $request->user_type;
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->birth_date = $request->birth_date;

        $result = $user->save();

        if($result){
            $request->session()->flash('alert-success', 'Your profile has been updated successfully!');
            return redirect()->route('asdo.users.show', $user->id);
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
        $user = User::findOrFail($id);
        $blood_groups = DB::table('others')->where('id', $user->blood_group)->get();
        $member_types = DB::table('others')->where('id', $user->member_type)->get();
        $religions = DB::table('others')->where('id', $user->religion)->get();
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user', 'blood_groups', 'member_types', 'religions'));
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

        return view('admin.users.edit' , compact('user', 'blood_groups', 'member_types', 'religions'));
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

        //check if any field is changed
        if(!$user->isDirty()){
            $request->session()->flash('alert-danger', 'No data change has been made!');
            return redirect()->back();
        }

        //determine if email is unique
        if(!empty($request->email)){
            $uniqueEmail = User::where('email', $request->email)
                            ->where('user_type', $user->user_type)
                            ->where('id', '!=', $user->id)
                            ->select('id')
                            ->first();    
            
            if($uniqueEmail){
                return redirect()->back()->with('alert-danger', 'Email address has already been taken by another account!');
            }                 
        }


        //determine if phone number is unique
        if(!empty($request->phone)){
            $uniquePhone = User::where('phone', $request->phone)
                            ->where('user_type', $user->user_type)
                            ->where('id', '!=', $user->id)
                            ->select('id')
                            ->first();

            if($uniquePhone){
                return redirect()->back()->with('alert-danger', 'Phone number has already been taken by another account!');
            }             
        }

        //check if email and phone number both fields are empty
        if(!isset($request->email) && !isset($request->phone)){
            $request->session()->flash('alert-danger', 'Both email and phone number fields are empty. Please fill at least one!');
            return redirect()->back();
        }
    
        $request->validate([
            'name' => 'required|string',
            'email' => ['nullable', 'email']
        ]);


        //naming and storing photo 
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

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->father = $request->father;
        $user->mother = $request->mother; 
        $user->husband = $request->husband; 
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
            $request->session()->flash('alert-success', 'Your profile has been updated successfully!');
            return redirect()->route('asdo.users.show', $user->id);
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
        $user = User::findOrFail($id);
        if(isset($user->photo)){
            Storage::delete('public/asdo/images/'.$user->photo);            
        }

        $user->delete();

        return redirect()->route('asdo.users.index')->with('alert-success', 'User information removed from database!');
    }
}
