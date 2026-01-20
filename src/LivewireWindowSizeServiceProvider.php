<?php

namespace Tanthammar\LivewireWindowSize;

include_once 'Helpers.php';

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LivewireWindowSizeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/breakpoints.php', 'breakpoints');
    }

    public function boot(): void
    {
        $this->publishes([__DIR__ . '/../config/breakpoints.php' => config_path('breakpoints.php')], 'livewire-window-size');
        $this->loadViewsFrom(__DIR__ . '/../resources/', 'breakpoints');
        \Livewire::component('breakpoints', WindowSize::class);

        $this->bladeDirectives();
    }

    protected function bladeDirectives(): void
    {
        Blade::if('windowWidthLessThan', static function ($value): bool {
            return windowWidthLessThan($value);
        });

        Blade::if('windowWidthGreaterThan', static function ($value): bool {
            return windowWidthGreaterThan($value);
        });

        Blade::if('windowWidthBetween', static function (...$expression): bool {
            return windowWidthBetween($expression);
        });

        Blade::if('windowHeightLessThan', static function ($value): bool {
            return windowHeightLessThan($value);
        });

        Blade::if('windowHeightGreaterThan', static function ($value): bool {
            return windowHeightGreaterThan($value);
        });

        Blade::if('windowHeightBetween', static function (...$expression): bool {
            return windowHeightBetween($expression);
        });

        Blade::if('windowXs', static fn (): bool => windowXs());

        Blade::if('windowSm', static fn (): bool => windowSm());

        Blade::if('windowMd', static fn (): bool => windowMd());

        Blade::if('windowLg', static fn (): bool => windowLg());

        Blade::if('windowXl', static fn (): bool => windowXl());

        Blade::if('window2xl', static fn (): bool => window2xl());

        Blade::if('mobileDevice', static fn (): bool => mobileDevice());
    }
}
