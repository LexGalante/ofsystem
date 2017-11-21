<?php

namespace OfSystem\Policies;

use OfSystem\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class MarcaPolicy
{
    use HandlesAuthorization;
    
    public function listar(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.listar')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function visualizar(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.visualizar')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function criar(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.criar')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function alterar(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.alterar')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function excluir(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'marca.excluir')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
}
