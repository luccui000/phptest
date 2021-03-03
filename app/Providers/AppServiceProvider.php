<?php

namespace App\Providers;

use App\Billings\CreditPaymentGateway;
use App\Billings\PaymentGateway;
use App\Contracts\Repositories\PaymentGatewayContrast;
use Illuminate\Support\ServiceProvider;


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
        $this->app->singleton(PaymentGatewayContrast::class, function($app) {
            if(request()->has('credit')) {
                return new CreditPaymentGateway('vnd');
            }
            return new PaymentGateway('vnd');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        $this->app->singleton(
            \App\Contracts\Repositories\CategoryRepository::class,
            \App\Repositories\CategoryRepositoryEloquent::class
        );
    }
}
