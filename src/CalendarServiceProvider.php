<?php

namespace Kennebula\Calendar;

use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Kennebula\Calendar\CalendarController');
        $this->app->make('Kennebula\Calendar\CalendarService');
        $this->loadViewsFrom(__DIR__.'/views', 'calendar');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
    }
}
