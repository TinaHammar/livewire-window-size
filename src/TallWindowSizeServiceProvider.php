<?php

namespace Tanthammar\TallWindowSize;

use Illuminate\Support\ServiceProvider;

class TallWindowSizeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/', 'tall');
        \Livewire::component('tall-window-size', \Tanthammar\TallWindowSize\WindowSize::class);
    }
}
