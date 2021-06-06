<?php

namespace App\Providers;

use App\Models\Mainmenu;
use App\Models\Submenu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //


        Schema::defaultStringLength(191);
        Paginator::useBootstrap();

        view()->composer(['layouts.*'], function ($view) {
            $view->with('mainmenu', Mainmenu::orderBy('serial', 'asc')->get());
        });

        view()->composer(['layouts.*'], function ($view) {
            $view->with('submenu', Submenu::orderBy('serial', 'asc')->get());
        });

    }
}
