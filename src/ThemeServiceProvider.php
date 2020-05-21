<?php

namespace Ghalwash\MerqLaravelNovaThemeResponsive;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/merq-nova-theme-responsive.php';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::style('merq-laravel-nova-theme-responsive', __DIR__.'/../resources/css/theme.css');
            Nova::script('merq-laravel-nova-theme-responsive', __DIR__.'/../resources/js/theme.js');
            Nova::provideToScript([
                'ntr' => config('merq-nova-theme-responsive')
            ]);
        });

        $this->publishes([
            self::CONFIG_PATH => config_path('merq-nova-theme-responsive.php'),
        ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'merq-nova-theme-responsive'
        );
    }
}
