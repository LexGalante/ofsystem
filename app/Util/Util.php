<?php

namespace OfSystem\Util;

class Util
{    
    public static function modelValidationMessages()
    {
        return [
            'date' => '(:attribute) formato inválido',
            'date_format' => '(:attribute) não está em um formato válido',
            'integer' => '(:attribute) deve conter apenas números inteiros',
            'email' => '(:attribute) não é um e-mail válido',
            'required' => 'O campo :attribute é obrigatório',
            'size' => 'O campo :attribute deve conter o tamanho :size.',
            'between' => 'O campo :attribute deve estar entre :min e :max.',
            'in' => 'O campo :attribute deve estar entre os valores (:values)',
            'max' => '(:attribute) excedeu tamanho maximo de :max',
            'max' => '(:attribute) deve conter no minimo :min caracteres',
            'unique' => '(:attribute) não pode ser repetido o informado já consta na base de dados',
            'string' => 'Verifique o campo (:attribute)'
        ];
    }
    /**
     * Remove value mask
     * Remove: array => ['.', '-', '/', '(', ')', 'R', '$', '%', '_'];
     *
     * @param string $campo (value)
     * @param boolean $removerEspaco (Flag que determina remover ou não os espaços em branco. Default false.)
     * @param array $extra (Caractres extras a serem removidos)
     * @return string
     */
    public static function removeMask($campo, $removerEspaco = false, $extra = [])
    {
        // set chars to remove
        $remover = array('.', '-', '/', '(', ')', 'R', '$', '%', '_');
        $remover = array_merge($remover, $extra);
        
        // check for remove empty space
        if($removerEspaco) {
            $remover = array_merge($remover, [' ']);
        }
        
        // fomat and return  value
        return str_replace(',', '.', (str_replace($remover, '', $campo)));
    }
}