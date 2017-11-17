<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //CONSTANTES
    CONST ATIVO = 'A';
    CONST INATIVO = 'I';
    CONST TIPO_FISICA = 'F';
    CONST TIPO_JURIDICA = 'J';
    CONST GENERO_MASCULINO = 'M';
    CONST GENERO_FEMININO = 'F';
    CONST GENERO_OUTROS = 'O';
    //Atributos para criação em massa
    public $fillable = ['tipo', 'nome', 'sobrenome', 'nascimento', 'genero', 'cprf', 'logradouro', 'numero', 'bairro', 'cidade', 'cep', 'uf', 'situacao'];
    /**
     * Validações da model
     * @return string[]
     */
    public static function rules()
    {
        return [
            'nome' => 'required|string|between:3,100',
            'sobrenome' => 'string|between:5,200',
            'tipo' => 'in:F,J',
            'nascimento' => 'date_format:"d-m-Y"',
            'cprf' => 'integer',
            'logradouro' => 'string|between:3,100',
            'numero' => 'between:1,10',
            'bairro' => 'string|between:3,100',
            'cidade' => 'string|between:3,100',
            'situacao' => 'in:A,I',
            'contato.tipo' => 'in:E,T,C,S',
        ];
    }
    /**
     * Relacionamento contatos 1-N
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contatos()
    {
        return $this->hasMany(ClienteContato::class);
    }
    /**
     * Cadastra um contato
     * @param ClienteContato $contato
     */
    public function addContato(ClienteContato $contato)
    {
        return $this->contatos()->save($contato);
    }
    /**
     * Relacionamento contatos 1-N
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function veiculos()
    {
        return $this->hasMany(Veiculo::class);
    }
    /**
     * Cadastra um veiculo
     * @param Veiculo $veiculo
     */
    public function addVeiculo(Veiculo $veiculo)
    {
        return $this->veiculos()->save($veiculo);
    }
}
