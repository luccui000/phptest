<?php

namespace App\Providers;

use App\Billings\CreditPaymentGateway;
use App\Billings\PaymentGateway;
use App\Channels;
use App\Contracts\Repositories\PaymentGatewayContrast;
use App\Repositories\PostRepository;
use App\Repositories\PostRepositoryConstract;
use App\View\Channels\ChannelsComposer;
use Illuminate\Support\Facades\View;
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
        $this->app->singleton(
            \App\Contracts\Repositories\CategoryRepository::class,
            \App\Repositories\CategoryRepositoryEloquent::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        // view()->share('channels', Channels::where('id', '=', '10')->get());
        // view()->composer(['post.*', 'channel.*'], function($view) {
        //     $view->with('channels', Channels::orderBy('name', 'asc')->get());
        // }); 
        view()->composer('partials.*', ChannelsComposer::class);
    }
}
