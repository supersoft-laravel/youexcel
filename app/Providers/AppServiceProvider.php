<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->environment('local') && !$this->app->runningInConsole()) {
            // In local XAMPP, APP_URL may point to port 8000 (artisan serve).
            // Auto-detect the real request root so asset() generates correct URLs.
            \URL::forceRootUrl(request()->root());
        } else {
            \URL::forceScheme('https');
        }
        Schema::defaultStringLength(191);
  
        // Paginator::useBootstrap();
    }
}
