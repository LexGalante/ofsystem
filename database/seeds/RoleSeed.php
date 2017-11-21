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
        
        Role::create(['role' => 'cor.index']);
        Role::create(['role' => 'cor.store']);
        Role::create(['role' => 'cor.show']);
        Role::create(['role' => 'cor.report']);
        Role::create(['role' => 'cor.update']);
        Role::create(['role' => 'cor.delete']);
        
        Role::create(['role' => 'cargo.index']);
        Role::create(['role' => 'cargo.store']);
        Role::create(['role' => 'cargo.show']);
        Role::create(['role' => 'cargo.report']);
        Role::create(['role' => 'cargo.update']);
        Role::create(['role' => 'cargo.delete']);
        
        Role::create(['role' => 'marca.index']);
        Role::create(['role' => 'marca.store']);
        Role::create(['role' => 'marca.show']);
        Role::create(['role' => 'marca.report']);
        Role::create(['role' => 'marca.update']);
        Role::create(['role' => 'marca.delete']);
    }
}
