<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
// use Illuminate\Support\Facades\URL::forceScheme('https');

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
        // if (env(key: 'APP_ENV') !== 'local'){
        //     URL::forceScheme(scheme: 'https');
        // }
        // if (env('APP_ENV') === 'production') {
        //     \Illuminate\Support\Facades\URL::forceScheme('https');
        // }
        // if(config('app.debug')!=true) {
        //     \URL::forceScheme('https');
        // }
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }
}
