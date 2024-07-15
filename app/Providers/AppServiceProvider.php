<?php

namespace App\Providers;
use App\Models\Categorie;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        view()->composer('HomeContant.layout.homeLayout', function ($view) {
            $view->with('Categorie',Categorie::with('subcategorie')->latest()->get());
        
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
    }
}
