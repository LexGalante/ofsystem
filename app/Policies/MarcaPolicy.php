<?php

namespace OfSystem\Policies;

use OfSystem\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class MarcaPolicy
{
    use HandlesAuthorization;
    
    public function index(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.index')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function show(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.show')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function store(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.store')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function update(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.update')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function delete(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.delete')->orWhere('role_name', 'admin.all')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
}
