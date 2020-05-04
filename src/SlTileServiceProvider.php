<?php

namespace Robbens\SlTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class SlTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchDataFromSLApiCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/dashboard-sl-tile'),
        ], 'dashboard-sl-tile-views');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'dashboard-sl-tile');

        Livewire::component('sl-tile', SlTileComponent::class);
    }
}
