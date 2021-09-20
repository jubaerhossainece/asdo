<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\CampaignFile;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    public function index(){
        $campaigns = Campaign::all();
        return view('frontend.campaigns.index', compact('campaigns'));            
    }


    public function show($id){
        $campaign = Campaign::find($id);
        return view('frontend.campaigns.show', compact('campaign'));
    }
}
