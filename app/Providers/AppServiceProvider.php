<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use PHPUnit\Event\TestRunner\GarbageCollectionDisabled;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('pagination::default');

        Gate::define('destroy-country', function (User $user, Country $country){
            return $user->is_admin OR $country->population < 100000000;
        });
    }
}



