<?php

namespace OfSystem\Policies;

use OfSystem\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class CorPolicy
{
    use HandlesAuthorization;
    
    public function index(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cor.index')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function show(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cor.show')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function store(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cor.store')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function update(User $user, Cliente $cliente)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cor.update')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function delete(User $user, Cliente $cliente)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cor.delete')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
}
