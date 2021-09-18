<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

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
        $n = count($sliders);
        return view('frontend.index', compact('sliders', 'n'));
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
