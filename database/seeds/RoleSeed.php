<?php

use Illuminate\Database\Seeder;
use OfSystem\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['role' => 'cliente.index']);
        Role::create(['role' => 'cliente.store']);
        Role::create(['role' => 'cliente.show']);
        Role::create(['role' => 'cliente.report']);
        Role::create(['role' => 'cliente.update']);
        Role::create(['role' => 'cliente.delete']);
        
        Role::create(['role' => 'funcionario.index']);
        Role::create(['role' => 'funcionario.store']);
        Role::create(['role' => 'funcionario.show']);
        Role::create(['role' => 'funcionario.report']);
        Role::create(['role' => 'funcionario.update']);
        Role::create(['role' => 'funcionario.delete']);
        
        Role::create(['role' => 'veiculo.index']);
        Role::create(['role' => 'veiculo.store']);
        Role::create(['role' => 'veiculo.show']);
        Role::create(['role' => 'veiculo.report']);
        Role::create(['role' => 'veiculo.update']);
        Role::create(['role' => 'veiculo.delete']);
    }
}
