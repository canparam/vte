<?php

namespace App\Providers;

use App\Menu\MenuFactory;
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
        require_once(app_path() . '/Helper/helpers.php');
        $this->app->singleton('cnv.menu.factory', function ($app) {
            return new MenuFactory();
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
