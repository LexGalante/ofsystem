<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;

class ClienteContato extends Model
{
    //Constantes
    CONST TELEFONE = 'T';
    CONST CELULAR = 'C';
    CONST EMAIL = 'E';
    CONST SITE = 'S';
    //Atributos para criação em massa
    public $fillable = ['tipo', 'contato'];
    //Relacionamentos
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
