<?php

namespace App\Providers;

use App\Http\Controllers\Customer\Servies\CustomerServicesInterface;
use App\Http\Controllers\CustomerController\Repositories\customer\CustomerRepository;
use App\Http\Controllers\CustomerController\Repositories\CustomerRepositoryInterface;
use App\Http\Controllers\CustomerController\Services\CustomerServices;
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
        $this->app->singleton(CustomerServicesInterface::class,
            CustomerServices::class);
        $this->app->singleton(CustomerRepositoryInterface::class,
            CustomerRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
