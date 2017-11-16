<?php

namespace OfSystem\Policies;

use OfSystem\User;
use OfSystem\Cliente;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class ClientePolicy
{
    use HandlesAuthorization;
    
    public function index(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cliente.index')->first();  
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function show(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cliente.show')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function store(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cliente.store')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function update(User $user, Cliente $cliente)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cliente.update')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function delete(User $user, Cliente $cliente)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cliente.delete')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
}
