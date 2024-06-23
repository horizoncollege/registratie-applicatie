<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
    public function boot()
    {
        // Use custom pagination view
        Paginator::defaultView('vendor.pagination.simple-default');

        // If you also want to customize the "simple" view (for simplePaginate)
        Paginator::defaultSimpleView('vendor.pagination.simple-default');
    }
}
