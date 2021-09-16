<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectFile;
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
            $filename_with_ext = time().'.'.$extension;
            $request->file('file')->storeAs($path, $filename_with_ext);    
        }

        $file = new ProjectFile;
        $file->project_id = $request->project_id;
        $file->file_name = $filename_with_ext;
        $result = $file->save();

        if($result){
            return response()->json(true);
        }else{
            return response()->json(false); 
        }

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch($id)
    {
        $images = DB::table('project_files')
                ->where('id', $id)
                ->select('id', 'file_name')
                ->get();
        return response()->json($images);
    }
}
