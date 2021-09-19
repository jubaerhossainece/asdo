<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Project;
use App\Models\ProjectFile;
use App\Models\Admin;

class HomeController extends Controller
{
    
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        $sliders = Slider::all();
        $project = Project::find(7);
        return $project->latestFile;
        $projects = Project::orderBy('date', 'desc')->limit(6)->get();

        return view('frontend.index', compact('sliders', 'projects'));
    }


    /**
     * Show the application about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about(Request $request)
    {
        return view('frontend.about');
    }


    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact(Request $request)
    {
        return view('frontend.contact');
    }


    /**
     * Show the application alokito school page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function school(Request $request)
    {
        return view('frontend.school');
    }
}
