<?php

namespace OfSystem\Policies;

use OfSystem\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class VeiculoPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.index')->first();  
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function show(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.show')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function store(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.store')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function update(User $user, Cliente $cliente)
    {
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.update')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function delete(User $user, Cliente $cliente)
    {
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.delete')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
}