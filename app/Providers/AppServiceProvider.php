<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
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
        Response::macro('error', function ($messeage, $exception, $http_code) {
            return response()->json([
                "message"   => $messeage,
                "exception" =>  $exception,
                "http_code" =>  $http_code
            ], $http_code);
        });
    }
}
