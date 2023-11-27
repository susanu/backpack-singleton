<?php

namespace App\WebService;

use Illuminate\Support\ServiceProvider;

class WebServiceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(WebService::class, function ($app) {
            return new WebService(config('services.web.token'));
        });
    }
}
