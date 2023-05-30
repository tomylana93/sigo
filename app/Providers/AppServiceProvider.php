<?php

namespace App\Providers;

use ProtoneMedia\Splade\Facades\Animation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Animation::new(
            name: 'slide-left',
            enter: 'transform transform ease-in-out duration-300',
            enterFrom: 'opacity-0 -translate-x-full',
            enterTo: 'opacity-100 translate-x-0',
            leave: 'transform transform ease-in-out duration-300',
            leaveFrom: 'opacity-100 translate-x-0',
            leaveTo: 'opacity-0 -translate-x-full',
        );
    }
}
