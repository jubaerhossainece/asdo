<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Gate;


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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function important_message(){
        Gate::authorize('app.contacts.index');
        $messages = Contact::where('is_important', true)->latest()->paginate(10);
        return view('admin.contacts.important', compact('messages'));
    }


    public function important_message_show($id){
        Gate::authorize('app.contacts.show');
        $message = Contact::find($id);
        $message->is_seen = true;
        $message->save();
        return view('admin.contacts.show', compact('message'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed_message(){
        Gate::authorize('app.contacts.index');
        $messages = Contact::onlyTrashed()->latest()->paginate(10);
        return view('admin.contacts.trash', compact('messages'));
    }


    public function trashed_message_show($id){
        Gate::authorize('app.contacts.show');
        $message = Contact::withTrashed()->find($id);
        $message->is_seen = true;
        $message->save();
        return view('admin.contacts.show', compact('message'));
    }

}
