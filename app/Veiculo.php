<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    //Atributos para criação em massa
    public $fillable = ['cliente_id', 'cor_id', 'marca_id', 'nome', 'placa', 'ano', 'modelo', 'renavam', 'chassi'];
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cor()
    {
        return $this->hasOne(Cor::class);
    }
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne(Marca::class);
    }
}
