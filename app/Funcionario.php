<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;


class Funcionario extends Model
{
    //CONSTANTES
    CONST CLIENTE_ATIVO = 'A';
    CONST CLIENTE_INATIVO = 'I';
    CONST CARGO_MECANICO = 'M';
    CONST CARGO_ATENDENTE = 'A';
    CONST CARGO_GERENTE = 'G';
    CONST CARGO_FUNILEIRO = 'F';
    CONST CARGO_OUTROS = 'O';
    //Atributos para criação em massa
    public $fillable = ['tipo', 'nome', 'sobrenome', 'cprf', 'logradouro', 'numero', 'bairro', 'cidade', 'cep', 'uf', 'situacao'];
    //Relacionamentos
    public function contatos()
    {
        return $this->belongsToMany(FuncionarioContato::class);
    }
    //Crud dos relacionamentos
    public function addContato(FuncionarioContato $contato)
    {
        $this->contatos()->save($contato);
    }
}
