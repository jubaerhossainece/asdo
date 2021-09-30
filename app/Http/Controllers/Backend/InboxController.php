<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class InboxController extends Controller
{
    //mark message as read
    public function read(Request $request){
        return $request;
    }


    //mark message as unread
    public function unread(Request $request){
        return $request;
    }


    //mark message as important
    public function important(Request $request){
        return $request;
    }

    //mark message as trashed
    public function trash(Request $request){
        return $request;
        Gate::authorize('app.contacts.destroy');
        $org->whereIn('id', $ids)->delete();
    }
}
