<?php

namespace App\Providers;

use App\Models\ProjectSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
require \base_path("app/Helpers/Helpers.php");

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
        View::composer('*', function($view) {
           $view->with('setting', ProjectSetting::query()->first());
        });
    }
}
