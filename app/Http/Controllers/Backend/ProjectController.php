<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.projects.index');
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.projects.create');
        return view('admin.projects.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.projects.create');
        $request->validate([
            'header' => 'required',
        ]);

        if($request->hasFile('photo')){
            $path = 'public/asdo/images/projects';
            $file= $request->file('photo');
            $photo_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($photo_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'project-photo'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);
        }

        $project = new Project;
        $project->video_link = $request->video_link;
        $project->header = $request->header;
        $project->body = $request->body;
        $project->location = $request->location;
        $project->date = $request->date;
        // $project->category = $request->category; 
        $result = $project->save();

        if($result){
            return redirect()->route('asdo.image.projects.show', $project->id)->with('alert-success', 'Project detail posted successfully!');
        }else{
            return redirect()->route('asdo.projects.create')->with('alert-danger', 'Something went wrong!');
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
        Gate::authorize('app.projects.show');
        $project = Project::findOrFail($id);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        Gate::authorize('app.projects.edit');
        $project = Project::findOrFail($id);
        return view('admin.projects.form', compact('project'));
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
        Gate::authorize('app.projects.edit');
        $project = Project::findOrFail($id);
        $request->validate([
            'header' => 'required|string',
        ]);

        if($request->hasFile('photo')){
            $path = 'public/asdo/images/projects';
            $file= $request->file('photo');
            $photo_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($photo_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'project-photo'.time().'.'.$extension;
            $request->file('photo')->storeAs($path, $filename_with_ext);   
            Storage::delete('public/asdo/images/projects/'.$project->photo); 
        }

        $project->photo = isset($filename_with_ext) ? $filename_with_ext : $project->photo;
        $project->video_link = $request->video_link;
        $project->header = $request->header;
        $project->body = $request->body;
        $project->location = $request->location;
        $project->date = $request->date;
        $result = $project->save();

        if($result){
            $request->session()->flash('alert-success', 'Project detail updated successfully!');
            return redirect()->route('asdo.projects.show');
        }else{
            $request->session()->flash('alert-danger', 'Something went wrong!');
            return redirect()->route('asdo.projects.edit');
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
        Gate::authorize('app.projects.destroy');
        $project = Project::findOrFail($id);
        $project->delete();
        if(isset($project->photo)){
            Storage::delete('public/asdo/images/projects/'.$project->photo);            
        }

        return redirect()->route('asdo.projects.index')->with('alert-success', 'Project detail removed from database!');
    }

}
