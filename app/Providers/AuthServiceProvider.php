<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //This is the roles authorisation gates

        Gate::define('manage-users', function($user){
        return $user->hasAnyRoles(['admin']);
        });
        Gate::define('edit-users', function($user){
            return $user->hasAnyRoles(['admin','user']);
        });
        Gate::define('edit-user', function($user){
            return $user->hasRole('admin');
        });
        Gate::define('delete-user', function($user){
            return $user->hasRole('admin');
        });

        Gate::define('manage-staff', function($user){
            return $user->hasAnyRoles(['user']);
        });
        Gate::define('manage-other', function($user){
            return $user->hasAnyRoles(['admin','user']);
        });
    }
}
