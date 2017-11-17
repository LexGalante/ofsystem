<?php

namespace OfSystem;

use Illuminate\Database\Eloquent\Model;

class Cor extends Model
{
    protected $table = 'cores';
    public $fillable = ['cor'];
    /**
     * Validações da model
     * @return string[]
     */
    public static function rules()
    {
        return [
            'cor' => 'required|string|between:3,100',
        ];
    }
}
