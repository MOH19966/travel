<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;

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
        // I have Add This fucntion use these generators
        //for local development, so you don't want to update the production
        if ($this->app->environment() == 'local') {
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // jameel to share a piece of data with all views that are rendered bymyapplication.
        //View::share('id', auth()->user());

    }


}
