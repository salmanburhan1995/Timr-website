<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(TranslationService::class, function ($app) {
            return new TranslationService(new Client(env('OPENAI_API_KEY')));
        });
        $this->app->singleton('CustomerService', function ($app) {
            return new \App\Services\Stripe\CustomerService();
        });
        $this->app->singleton('CardService', function ($app) {
            return new \App\Services\Stripe\CardService();
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
