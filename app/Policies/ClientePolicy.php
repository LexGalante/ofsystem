<?php

namespace OfSystem\Policies;

use OfSystem\User;
use OfSystem\Cliente;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\DB;

class ClientePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view the cliente.
     *
     * @param  \OfSystem\User  $user
     * @param  \OfSystem\Cliente  $cliente
     * @return mixed
     */
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
    
    /**
     * Determine whether the user can view the cliente.
     *
     * @param  \OfSystem\User  $user
     * @param  \OfSystem\Cliente  $cliente
     * @return mixed
     */
    public function view(User $user, Cliente $cliente)
    {
        if(empty($user->roles()->find()->where('role_name', 'cliente.view'))){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * Determine whether the user can create clientes.
     *
     * @param  \OfSystem\User  $user
     * @return mixed
     */
    public function store(User $user)
    {
        if(empty($user->roles()->find()->where('role_name', 'cliente.store'))){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * Determine whether the user can update the cliente.
     *
     * @param  \OfSystem\User  $user
     * @param  \OfSystem\Cliente  $cliente
     * @return mixed
     */
    public function update(User $user, Cliente $cliente)
    {
        if(empty($user->roles()->find()->where('role_name', 'cliente.update'))){
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * Determine whether the user can delete the cliente.
     *
     * @param  \OfSystem\User  $user
     * @param  \OfSystem\Cliente  $cliente
     * @return mixed
     */
    public function delete(User $user, Cliente $cliente)
    {
        if(empty($user->roles()->find()->where('role_name', 'cliente.delete'))){
            return false;
        }
        else{
            return true;
        }
    }
}
