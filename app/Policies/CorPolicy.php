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
        $permission = DB::table('user_roles')->where('role_name', 'cor.index')->orWhere('role_name', 'admin.all')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function show(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cor.show')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function store(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cor.store')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function update(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cor.update')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function delete(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'cor.delete')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
}
