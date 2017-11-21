<?php

namespace OfSystem\Policies;

use OfSystem\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class FuncionarioPolicy
{
    use HandlesAuthorization;

    public function listar(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'funcionario.listar')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function visualizar(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'funcionario.visualizar')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function criar(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'funcionario.criar')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function alterar(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'funcionario.alterar')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
    
    public function excluir(User $user)
    {
        $permission = DB::table('user_roles')->where('role_name', 'funcionario.excluir')->orWhere('role_name', 'admin')->first();
        if(empty($permission)){
            return false;
        }
        else{
            return true;
        }
    }
}
