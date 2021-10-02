<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Gate;

class ContactController extends Controller
{
    public function __construct() 
    { 
        $this->middleware('preventBackHistory');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('app.contacts.index');
        $messages = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('messages'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Gate::authorize('app.contacts.show');
        $message = Contact::withTrashed()->find($id);
        $message->is_seen = true;
        $message->save();
        return view('admin.contacts.show', compact('message'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Gate::authorize('app.contacts.destroy');
        $ids = $request->mail_array[0];
        $ids = explode(",", $ids);
        Contact::whereIn('id', $ids)->delete();

        return redirect()->back();
    }
}
