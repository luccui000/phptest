<?php

namespace App\Providers;

use App\Repositories\PostRepository;
use App\Repositories\PostRepositoryConstract;
use App\Repositories\CustomerRepository;
use App\Contracts\Repositories\CustomerRepositoryConstract;
use Illuminate\Support\ServiceProvider;

class AccessServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostRepositoryConstract::class, PostRepository::class);
        $this->app->bind(CustomerRepositoryConstract::class, CustomerRepository::class);
    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
