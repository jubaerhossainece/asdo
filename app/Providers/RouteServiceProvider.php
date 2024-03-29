<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/member/profile';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            //all routes for admin written in backend.php file  
            Route::middleware('web', 'auth:admin')
                ->prefix('asdo')
                ->name('asdo.')
                ->namespace($this->namespace)
                ->group(base_path('routes/backend.php'));

            //all routes for member written in user.php file
            Route::middleware('web', 'auth')
                ->prefix('member')
                ->name('member.')
                ->namespace($this->namespace)
                ->group(base_path('routes/user.php'));
                
            //all routes for volunteer written in volunteer.php file        
            Route::middleware('web', 'auth:volunteer')
                ->prefix('volunteer')
                ->name('volunteer.')
                ->namespace($this->namespace)
                ->group(base_path('routes/volunteer.php'));    
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
