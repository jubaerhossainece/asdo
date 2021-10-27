<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function __construct() 
    { 
        $this->middleware('preventBackHistory');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Gate::authorize('app.dashboard');
        $admins = DB::table('admins')->count();
        $members = DB::table('users')->count();
        $vols = DB::table('users')->count();
        return view('admin.index', compact('members', 'vols', 'admins'));
    }
}
