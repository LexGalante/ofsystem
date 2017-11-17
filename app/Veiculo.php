<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    CONST ATIVO = 'A';
    CONST INATIVO = 'I';
    //Atributos para criação em massa
    public $fillable = ['cliente_id', 'cor_id', 'marca_id', 'nome', 'placa', 'ano', 'modelo', 'renavam', 'chassi'];
    /**
     * Validações da model
     * @return string[]
     */
    public static function rules()
    {
        return [
            'cliente_id' => 'required',
            'marca_id' => 'required',
            'cor_id' => 'required',
            'nome' => 'required|string|between:3,100',
            'placa' => 'required|string|between:5,200',
            'ano' => 'date_format:"Y"',
            'modelo' => 'date_format:"Y"',
            'renavam' => 'string|between:3,20',
            'chassi' => 'string|between:3,100',
            'situacao' => 'in:A,I'
        ];
    }
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cor()
    {
        return $this->belongsTo(Cor::class);
    }
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
}
