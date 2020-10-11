<?php

namespace App\Providers;

use http\Env\Request;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\Access\Response;
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

        Gate::define('appointment', function ($user) {
            return $user->appointment == 1
                ? Response::allow()
                : Response::deny('Você não tem a permissão para acessar.');
        });

        Gate::define('store', function ($user) {
            return $user->store == 1
                ? Response::allow()
                : Response::deny('Você não tem a permissão para acessar.');
        });

        Gate::define('blog', function ($user) {
            return $user->blog == 1
                ? Response::allow()
                : Response::deny('Você não tem a permissão para acessar.');
        });

        Gate::define('client_deny', function ($user) {
            return $user->role == 'Cliente' && ($user->store == 1 || $user->blog == 1)
                ? Response::deny('Você não tem a permissão para acessar.')
                : Response::allow();
        });
    }
}
