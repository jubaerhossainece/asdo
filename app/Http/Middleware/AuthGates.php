<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Admin;

class AuthGates
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::guard('admin')->user();
        if($user){
            $permissions = Permission::all();
            foreach($permissions as $key => $permission) {
                Gate::define($permission->slug, function(Admin $admin) use ($permission){
                    return $admin->hasPermission($permission->slug);
                });
            }
        }
        return $next($request);
    }
}
