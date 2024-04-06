<?php

namespace Schaefersoft\UI\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UIServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'ui');

        Blade::componentNamespace('Schaefersoft\\UI\\View\\Components', 'ui');
    }
}
