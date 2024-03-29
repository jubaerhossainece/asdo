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
        $photos = $request->file('file');
            //      $photo_name = $photo->getClientOriginalName();

            // return response()->json($photo_name);

        if($request->hasFile('file')){
            for($i = 0; $i < count($photos); $i++ ){
                $path = 'public/asdo/images/projects';
                $file= $photos[$i];
                $photo_name = $file->getClientOriginalName();
                $filename_without_ext = pathinfo($photo_name, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $filename_with_ext = time().$i.'.'.$extension;
                $photos[$i]->storeAs($path, $filename_with_ext);    

                $image = new ProjectFile;
                $image->project_id = $request->project_id;
                $image->file_name = $filename_with_ext;
                $result = $image->save();
            }
        }

        if($result){
            return response()->json(true);
        }else{
            return response()->json(false); 
        }

    }


    /**
    * fetch a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function fetch($id)
    {
        $images = DB::table('project_files')
                ->where('project_id', $id)
                ->select('id', 'file_name')
                ->get();
        return response()->json($images);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = ProjectFile::findOrFail($id);

        $path = 'public/asdo/images/projects/';
        Storage::delete($path.$image->file_name);
        $image->delete();
        return response()->json('deleted');
    }
}
