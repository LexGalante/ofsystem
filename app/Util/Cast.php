<?php

namespace OfSystem\Util;

class Cast
{  
    /**
     * Formata um valor para BRL
     * @param unknown $string
     * @return string
     */
    public static function moneyMaskBackend($string)
    {
        return number_format(Util::removeMask($string), 2, '.', '');
    }
    /**
     * Formata um valor para o mysql
     * @param unknown $string
     * @return string
     */
    public static function moneyMaskFrontEnd($string)
    {
        return "R$ ".number_format($string, 2, ',', '.');
    }
    /**
     * Formata uma data para o padrão Y-m-d
     * @param unknown $string
     * @return unknown
     */
    public static function dateMaskBackend($string)
    {
        if($string){
            if(\DateTime::createFromFormat('d/m/Y', $string)){
                return \DateTime::createFromFormat('d/m/Y', $string)->format('Y-m-d');
            }
            
            if(\DateTime::createFromFormat('d/m/Y H:i:s', $string)){
                return \DateTime::createFromFormat('d/m/Y H:i:s', $string)->format('Y-m-d');
            }
            
            if(\DateTime::createFromFormat('Y-m-d H:i:s', $string)){
                return \DateTime::createFromFormat('Y-m-d H:i:s', $string)->format('Y-m-d');
            }
            
            if(\DateTime::createFromFormat('U', $string)){
                return \DateTime::createFromFormat('U', $string)->format('Y-m-d');
            }
        }
    }
    /**
     * Formata uma data para o padrão d/m/Y
     * @param unknown $string
     * @return unknown
     */
    public static function dateMaskFrontend($string)
    {
        if($string){
            if(\DateTime::createFromFormat('d/m/Y', $string)){
                return \DateTime::createFromFormat('d/m/Y', $string)->format('d/m/Y');
            }
            
            if(\DateTime::createFromFormat('d/m/Y H:i:s', $string)){
                return \DateTime::createFromFormat('d/m/Y H:i:s', $string)->format('d/m/Y');
            }
            
            if(\DateTime::createFromFormat('Y-m-d', $string)){
                return \DateTime::createFromFormat('Y-m-d', $string)->format('d/m/Y');
            }
            
            if(\DateTime::createFromFormat('Y-m-d H:i:s', $string)){
                return \DateTime::createFromFormat('Y-m-d H:i:s', $string)->format('d/m/Y');
            }
            
            if(\DateTime::createFromFormat('U', $string)){
                return \DateTime::createFromFormat('U', $string)->format('d/m/Y');
            }
        }
    }
    /**
     * Formata uma data para o padrão Y-m-d H:i:s
     * @param unknown $string
     * @return unknown
     */
    public static function dateTimeMaskBackend($string)
    {
        if($string){
            if(\DateTime::createFromFormat('d/m/Y', $string)){
                return \DateTime::createFromFormat('d/m/Y', $string)->format('Y-m-d H:i:s');
            }
            
            if(\DateTime::createFromFormat('d/m/Y H:i:s', $string)){
                return \DateTime::createFromFormat('d/m/Y H:i:s', $string)->format('Y-m-d H:i:s');
            }
            
            if(\DateTime::createFromFormat('Y-m-d', $string)){
                return \DateTime::createFromFormat('Y-m-d', $string)->format('Y-m-d H:i:s');
            }
            
            if(\DateTime::createFromFormat('Y-m-d H:i:s', $string)){
                return \DateTime::createFromFormat('Y-m-d H:i:s', $string)->format('Y-m-d H:i:s');
            }
            
            if(\DateTime::createFromFormat('U', $string)){
                return \DateTime::createFromFormat('U', $string)->format('Y-m-d H:i:s');
            }
        }
    }
    /**
     * Formata uma data para o padrão d/m/Y H:i:s
     * @param unknown $string
     * @return unknown
     */
    public static function dateTimeMaskFrontend($string)
    {
        if($string){
            if(\DateTime::createFromFormat('d/m/Y', $string)){
                return \DateTime::createFromFormat('d/m/Y', $string)->format('d/m/Y H:i:s');
            }
            
            if(\DateTime::createFromFormat('d/m/Y H:i:s', $string)){
                return \DateTime::createFromFormat('d/m/Y H:i:s', $string)->format('d/m/Y H:i:s');
            }
            
            if(\DateTime::createFromFormat('Y-m-d H:i:s', $string)){
                return \DateTime::createFromFormat('Y-m-d H:i:s', $string)->format('d/m/Y H:i:s');
            }
            
            if(\DateTime::createFromFormat('U', $string)){
                return \DateTime::createFromFormat('U', $string)->format('d/m/Y H:i:s');
            }
        }
    }
}