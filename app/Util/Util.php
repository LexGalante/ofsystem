<?php

namespace OfSystem\Util;

class Util
{    
    public static function modelValidationMessages()
    {
        return [
            'date' => '(:attribute) formato inválido',
            'integer' => '(:attribute) deve conter apenas números inteiros',
            'email' => '(:attribute) não é um e-mail válido',
            'required' => 'O campo :attribute é obrigatório',
            'size' => 'O campo :attribute deve conter o tamanho :size.',
            'between' => 'O campo :attribute deve estar entre :min e :max.',
            'in' => 'O campo :attribute deve estar entre os valores (:values)',
            'max' => '(:attribute) excedeu tamanho maximo de :max',
            'max' => '(:attribute) deve conter no minimo :min caracteres',
            'unique' => '(:attribute) não pode ser salvo, use outro'
        ];
    }
}