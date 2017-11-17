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
    /**
     * Validações da model
     * @return string[]
     */
    public static function rules()
    {
        return [
            'marca' => 'required|string|between:3,100',
            'origem' => 'in:N,I,A'
        ];
    }
}
