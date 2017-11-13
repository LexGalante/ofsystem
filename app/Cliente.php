<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //CONSTANTES
    CONST CLIENTE_ATIVO = 'A';
    CONST CLIENTE_INATIVO = 'I';
    CONST TIPO_FISICA = 'F';
    CONST TIPO_JURIDICA = 'J';
    //Atributos para criação em massa
    public $fillable = ['tipo', 'nome', 'sobrenome', 'cprf', 'logradouro', 'numero', 'bairro', 'cidade', 'cep', 'uf', 'situacao'];
    //Relacionamentos
    public function contatos()
    {
        return $this->belongsToMany(ClienteContato::class);
    }
    //Crud dos relacionamentos
    public function addContato(ClienteContato $contato)
    {
        $this->contatos()->save($contato);
    }
}
