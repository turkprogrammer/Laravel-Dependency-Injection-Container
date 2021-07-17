<?php

namespace App\Providers;

use App\Contracts\Video\VideoHosting;
use App\Services\Video\Youtube;
use App\Services\Video\Vimeo;
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
        //определяем реализации интерфейса
       // $serviceVimeo = new Vimeo();
       // $this->app->instance(VideoHosting::class, $serviceVimeo);
        $this->app->singleton(VideoHosting::class, function ($app) {
            return new Vimeo;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
