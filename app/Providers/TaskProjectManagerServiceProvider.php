<?php

namespace Marco\TaskProjectManager\Providers;

use Illuminate\Support\ServiceProvider;
use Marco\TaskProjectManager\Services\Plugin;

class TaskProjectManagerServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(Plugin::class, function () {
            return new Plugin();
        });
    }

    public function boot(): void
    {
        //
    }
}