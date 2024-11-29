<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        Paginator::defaultView('pagination::bootstrap-4');

        Gate::define('destroy-country', function (User $user, Country $country){
            return $user->is_admin==1 OR $country->population < 100000000;
        });

        Gate::define('create-country', function (User $user){
            return $user->is_admin==1;
        });
    }
}
