<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function show($heading, $id){
        $news = News::find($id);

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
        return view('frontend.news-show', compact('news', 'live_news'));
    }
}
