<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Contact;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {        
        View::composer('layouts.admin.partials.mail-sidebar', function ($view) {
            $inbox = Contact::where('is_seen', false)->count();
            $important = Contact::where('is_important', true)->count();
            $trashed = Contact::onlyTrashed()->count();
            $view->with('inbox', $inbox)->with('important', $important)->with('trashed', $trashed);
        });
    }
}
