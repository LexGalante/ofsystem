<?php

namespace OfSystem\Providers;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use OfSystem\Cliente;
use OfSystem\Policies\ClientePolicy;
use OfSystem\Veiculo;
use OfSystem\Policies\VeiculoPolicy;
use OfSystem\Marca;
use OfSystem\Policies\MarcaPolicy;
use OfSystem\Cor;
use OfSystem\Policies\CorPolicy;
use OfSystem\Cargo;
use OfSystem\Policies\CargoPolicy;
use OfSystem\Funcionario;
use OfSystem\Policies\FuncionarioPolicy;

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
        Veiculo::class => VeiculoPolicy::class,
        Marca::class => MarcaPolicy::class,
        Cor::class => CorPolicy::class,
        Cargo::class => CargoPolicy::class,
        Funcionario::class => FuncionarioPolicy::class       
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
