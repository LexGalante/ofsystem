<?php

namespace OfSystem\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use OfSystem\Cliente;
use OfSystem\Policies\ClientePolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'OfSystem\Model' => 'OfSystem\Policies\ModelPolicy',
        Cliente::class => ClientePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    }
}
