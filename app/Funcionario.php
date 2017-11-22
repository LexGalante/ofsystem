<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;
use OfSystem\Util\Util;


class Funcionario extends Model
{
    //Atributos para criação em massa
    public $fillable = ['user_id', 'cargo_id', 'tipo', 'nome', 'sobrenome', 'nascimento', 'genero', 'cprf', 'logradouro', 'numero', 'bairro', 'cidade', 'cep', 'uf', 'salario', 'admissao', 'demissao', 'filhos','situacao'];
    //Relacionamentos
    public function contatos()
    {
        return $this->hasMany(FuncionarioContato::class);
    }
    
    public function cargo()
    {
        return $this->belongsTo(Cargo::class);    
    }
    //Crud dos relacionamentos
    public function addContato(FuncionarioContato $contato)
    {
        $this->contatos()->save($contato);
    }
    
    public function addCargo(Cargo $cargo)
    {
        $this->cargo()->save($cargo);
    }
    
    public function fill(array $attributes)
    {
        if(isset($attributes['nascimento']) && \DateTime::createFromFormat('d/m/Y', $attributes['nascimento'])){
            $attributes['nascimento'] = \DateTime::createFromFormat('d/m/Y', $attributes['nascimento'])->format('Y-m-d');
        }
        
        if(isset($attributes['admissao']) && \DateTime::createFromFormat('d/m/Y', $attributes['admissao'])){
            $attributes['admissao'] = \DateTime::createFromFormat('d/m/Y', $attributes['admissao'])->format('Y-m-d');
        }
        
        if(isset($attributes['demissao']) && \DateTime::createFromFormat('d/m/Y', $attributes['demissao'])){
            $attributes['demissao'] = \DateTime::createFromFormat('d/m/Y', $attributes['demissao'])->format('Y-m-d');
        }
        
        if(isset($attributes['salario'])){
            $attributes['salario'] = Util::moneyMaskBackend($attributes['salario']);
        }
        
        return parent::fill($attributes);
    }
}
