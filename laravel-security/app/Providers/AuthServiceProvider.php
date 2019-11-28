<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('page_admin',function ($user){
            if ($user->admin == '1'){
                return true;
            }
            return false;
        });

        Gate::define('page_guest',function ($user){
           if ($user->admin == '1' || $user->admin == '0'){
               return true;
           }
           return false;
        });
    }
}
