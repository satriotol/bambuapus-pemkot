<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $view->with('notifications', Auth::user()?->unreadNotifications->take(5));
        });
        if (Auth::check()) {
        }
        Schema::defaultStringLength(125);
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
