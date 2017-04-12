<?php

namespace Bakrpx\TextRazor;

use Illuminate\Support\ServiceProvider;
use TextRazor;
use TextRazorSettings;

class TextRazorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            dirname(__DIR__).'/config/textrazor.php' => config_path('textrazor.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('textrazor', function ($app) {
            $config = $app->make('config')->get('textrazor');
            TextRazorSettings::setApiKey($config['TecxtRazor_key']);
            return new TextRazor;
        });
        $this->app->alias('textrazor', 'TextRazor');
    }
}
