<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Carbon;

class ProjectFileController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //view page for uploading project images
        $project = Project::findOrFail($id);
        return view('admin.projects.image', compact('project'));
    }


    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    { 
        if($request->hasFile('file')){
            $path = 'public/asdo/images/projects';
            $file= $request->file('file');
            $photo_name = $file->getClientOriginalName();
            $filename_without_ext = pathinfo($photo_name, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename_with_ext = 'project-photo'.time().'.'.$extension;
            $request->file('file')->storeAs($path, $filename_with_ext);    
        }

        $project_file = DB::table('project_files')->insert([
            'project_id' => $request->project_id,
            'file_name' => $filename_with_ext,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return response()->json('hello');

        $images = DB::table('project_files')->select('');

    }
}
