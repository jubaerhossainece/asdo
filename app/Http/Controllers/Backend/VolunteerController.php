<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.volunteers.index');
        $users = DB::table('volunteers')
                ->get();
        return view('admin.volunteers.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.volunteers.create');
        $blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();

        return view('admin.volunteers.create', compact('blood_groups', 'religions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.volunteers.create');

        //check if email and phone number both fields are empty
        if(!isset($request->email) && !isset($request->phone)){
            $request->session()->flash('alert-danger', 'Both email and phone number fields are empty. Please fill at least one!');
            return redirect()->back();
        }
    
        
        $request->validate([
            'name' => 'required|string',
            'email' => 'nullable|email|email:rfc,dns|unique:volunteers,email|max:200',
            'phone' => 'nullable|unique:volunteers,phone|max:20',
            'password' => 'required|min:6|string',
            'facebook_id' => 'nullable',
            'photo' => 'nullable|image',
        ]);


        //naming and storing photo 
        
        if($request->hasFile('photo')){
            $path = 'public/asdo/images/volunteers';
            $file= $request->file('photo');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'image'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);    
        }

        $user = new Volunteer;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->photo = isset($filename_with_ext) ? $filename_with_ext : '';
        $user->father = $request->father;
        $user->mother = $request->mother; 
        $user->spouse = $request->spouse; 
        $user->gender = $request->gender; 
        $user->nid = $request->nid;
        $user->birth_id = $request->birth_id;
        $user->blood_group = $request->blood_group;
        $user->nationality = $request->nationality;
        $user->religion = $request->religion;
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->birth_date = $request->birth_date;

        $result = $user->save();

        if($result){
            $request->session()->flash('alert-success', 'Volunteer profile has been created successfully!');
            return redirect()->route('asdo.volunteers.show', $user->id);
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
        Gate::authorize('app.volunteers.show');

        $user = Volunteer::findOrFail($id);

        $blood_groups = DB::table('others')
                        ->where('id', $user->blood_group)
                        ->select('name')
                        ->get();
        $religions = DB::table('others')
                    ->where('id', $user->religion)
                    ->select('name')
                    ->get();

        return view('admin.volunteers.show', compact('user', 'blood_groups', 'religions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.volunteers.edit');

        $blood_groups = DB::table('others')->where('category', 'blood group')->get();
        $religions = DB::table('others')->where('category', 'religion')->get();
        $user = Volunteer::findOrFail($id);

        return view('admin.volunteers.edit' , compact('user', 'blood_groups', 'religions'));
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
        Gate::authorize('app.volunteers.edit');

        $user = Volunteer::findOrFail($id);

        //$user->fill() fills up the $user data with $request object data
        //so we need to query again to obtain the user data from database
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
            'email' => ['nullable','email','email:rfc,dns',Rule::unique('volunteers')->ignore($user->id)],
            'phone' => ['nullable',Rule::unique('volunteers')->ignore($user->id)]
        ]);

        //naming and storing photo 
        if($request->hasFile('photo')){   
            $path = 'public/asdo/images/volunteers';
            $file= $request->file('photo');
            $image_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($image_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'volunteer'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);  
            Storage::delete('public/asdo/images/volunteers/'.$photo);  
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
        $user->facebook_id = $request->facebook_id;
        $user->education = $request->education;
        $user->occupation = $request->occupation;
        $user->present_address = $request->present_address;
        $user->permanent_address = $request->permanent_address;
        $user->birth_date = $request->birth_date;

        $result = $user->save();
        if($result){
            $request->session()->flash('alert-success', 'Volunteer profile has been updated successfully!');
            return redirect()->route('asdo.volunteers.show', $user->id);
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
        Gate::authorize('app.volunteers.destroy');

        $user = Volunteer::findOrFail($id);
        if(isset($user->photo)){
            Storage::delete('public/asdo/images/volunteers/'.$user->photo);            
        }

        $user->delete();

        return redirect()->route('asdo.volunteers.index')->with('alert-success', 'Volunteer information removed from database!');
    }
}
