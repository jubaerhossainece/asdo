<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\CampaignFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;


class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.campaigns.index');
        $campaigns = Campaign::all();
        return view('admin.campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('app.campaigns.create');
        return view('admin.campaigns.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('app.campaigns.create');
        $request->validate([
            'header' => 'required',
        ]);

        $campaign = new Campaign;
        $campaign->video_link = $request->video_link;
        $campaign->header = $request->header;
        $campaign->body = $request->body;
        $campaign->location = $request->location;
        $campaign->date = $request->date;
        // $campaign->category = $request->category; 
        $result = $campaign->save();

        if($result){
            return redirect()->route('asdo.image.campaigns.show', $campaign->id)->with('alert-success', 'Campaign detail posted successfully!');
        }else{
            return redirect()->route('asdo.campaigns.create')->with('alert-danger', 'Something went wrong!');
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
        Gate::authorize('app.campaigns.show');
        $campaign = Campaign::findOrFail($id);
        return view('admin.campaigns.show', compact('campaign'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('app.campaigns.edit');
        $campaign = Campaign::findOrFail($id);
        return view('admin.campaigns.form', compact('campaign'));
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
        Gate::authorize('app.campaigns.edit');
        $campaign = Campaign::findOrFail($id);

        $request->validate([
            'header' => 'required|string',
        ]);

        $campaign->video_link = $request->video_link;
        $campaign->header = $request->header;
        $campaign->body = $request->body;
        $campaign->location = $request->location;
        $campaign->date = $request->date;
        $result = $campaign->save();

        if($result){
            $request->session()->flash('alert-success', 'Campaign detail updated successfully!');
            return redirect()->back();
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
        Gate::authorize('app.campaigns.destroy');
        $campaign = Campaign::findOrFail($id);
        $images = CampaignFile::where('campaign_id', $campaign->id)
                                ->get();
         
        if(count($images) > 0){
            for($i = 0; $i < count($images); $i++){
                $images[$i]->file_name;
                Storage::delete('public/asdo/images/campaigns/'.$images[$i]->file_name);
                $images[$i]->delete();
            }
        }
        $campaign->delete();

        return redirect()->route('asdo.campaigns.index')->with('alert-success', 'Campaign detail removed from database!');
    }
}
