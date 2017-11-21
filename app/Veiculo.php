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
