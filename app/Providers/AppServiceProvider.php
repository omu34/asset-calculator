<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService; // Assuming ProductService exists

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind('product', function ($app) {
            return new ProductService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
