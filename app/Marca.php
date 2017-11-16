<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //Constantes
    CONST ORIGEM_NACIONAL = 'N';
    CONST ORIGEM_IMPORTADO = 'I';
    CONST ORIGEM_NACIONAL_E_IMPORTADO = 'A';
    //Atributos para criação em massa
    public $fillable = ['marca', 'origem'];
}
