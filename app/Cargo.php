<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //CONSTANTES
    CONST ATIVO = 'A';
    CONST INATIVO = 'I';
    //Atributos para criação em massa
    public $fillable = ['cargo', 'situacao'];
}
