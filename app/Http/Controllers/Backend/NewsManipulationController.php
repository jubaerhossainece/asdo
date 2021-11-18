<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use DateTime;
use DateInterval;

class NewsManipulationController extends Controller
{
    public function changeState($id){
        $news = News::findOrFail($id);
        $now = new DateTime();
        $pd = new DateTime($news->publishing_date);
        $ed = new DateTime($news->ending_date);
        
        if($pd < $now && $ed > $now){
            $news->ending_date = $now;
            $news->is_live = false;
            $news->save();
            return false;
        }elseif($pd < $now && $ed < $now){
            $news->is_live = !$news->is_live;
            $news->save();
            return $news->is_live;
        }
    }
}
