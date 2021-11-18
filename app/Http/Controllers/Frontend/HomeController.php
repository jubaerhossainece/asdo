<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Contact;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $projects = Project::orderBy('date', 'desc')->limit(6)->get();
        $live_news = DB::table('news')
                                ->where(function($query){
                                    date_default_timezone_set("Asia/Dhaka");
                                    $now = date('Y-m-d H:i:s');
                                    $query->where('publishing_date', '<', $now)
                                    ->where('ending_date', '>', $now);
                                })
                                ->orWhere('is_live', true)
                                ->select('id', 'heading','slug')
                                ->orderBy('publishing_date', 'desc')
                                ->get();

        return view('frontend.index', compact('sliders', 'projects', 'live_news'));
    }


    /**
     * Show the application about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('frontend.about');
    }


    /**
     * Show the application contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact()
    {
        return view('frontend.contact');
    }


    /**
     * Show the application alokito school page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function school()
    {
        return view('frontend.school');
    }


    public function send_message(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email:rfc,dns|max:100',
            'subject' => 'required|min:8|string',
            'message' => 'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $result = $contact->save();

        if($result){
            return response()->json([
                'success', 'Message sent successfully!'
            ]);
        }else{
            return response()->json([
                'danger', 'Message could not be sent!'
            ]);
        }
    }
}
