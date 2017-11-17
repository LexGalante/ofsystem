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
        $permission = DB::table('user_roles')->where('role_name', 'cliente.index')->orWhere('role_name', 'admin.all')->first();  
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function show(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cliente.show')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function store(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cliente.store')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function update(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cliente.update')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }

    public function delete(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cliente.delete')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
}
