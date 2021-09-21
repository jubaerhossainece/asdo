<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('frontend.projects.index', compact('projects'));            
    }


    public function show($id){
        $project = Project::find($id);
        return view('frontend.projects.show', compact('project'));
    }
}
