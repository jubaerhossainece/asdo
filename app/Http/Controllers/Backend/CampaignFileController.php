<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\CampaignFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Carbon;

class CampaignFileController extends Controller
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
        $campaign = Campaign::findOrFail($id);
        return view('admin.campaigns.image', compact('campaign'));
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

        if($request->hasFile('file')){
            for($i = 0; $i < count($photos); $i++ ){
                $path = 'public/asdo/images/campaigns';
                $file= $photos[$i];
                $photo_name = $file->getClientOriginalName();
                $filename_without_ext = pathinfo($photo_name, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $filename_with_ext = time().$i.'.'.$extension;
                $photos[$i]->storeAs($path, $filename_with_ext);    

                $image = new CampaignFile;
                $image->campaign_id = $request->campaign_id;
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
        $images = DB::table('campaign_files')
                ->where('campaign_id', $id)
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
        $image = CampaignFile::findOrFail($id);

        $path = 'public/asdo/images/campaigns/';
        Storage::delete($path.$image->file_name);
        $image->delete();
        return response()->json('deleted');
    }

}
