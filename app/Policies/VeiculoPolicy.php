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
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.index')->orWhere('role_name', 'admin.all')->first();  
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function show(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.show')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function store(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.store')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function update(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.update')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function delete(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'veiculo.delete')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
}
