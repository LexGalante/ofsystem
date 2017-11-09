<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;

class FuncionarioContato extends Model
{
    //Constantes
    CONST TELEFONE = 'T';
    CONST CELULAR = 'C';
    CONST EMAIL = 'E';
    CONST SITE = 'S';
    //Atributos para criação em massa
    public $fillable = ['tipo', 'contato'];
    //Relacionamentos
    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
