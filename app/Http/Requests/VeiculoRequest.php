<?php

namespace OfSystem\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use OfSystem\Util\Util;
use OfSystem\Veiculo;

class VeiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->method == self::METHOD_POST){
            return $this->user()->can('veiculo.store', Veiculo::class);
        }else if($this->method == self::METHOD_PUT){
            return $this->user()->can('veiculo.update', Veiculo::class);
        }
        else{
            return true;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->method){
            case self::METHOD_POST:
                return Veiculo::rules();
                break;
            case self::METHOD_PUT:
                return Veiculo::rules();
                break;
            default: return [];
        }
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return Util::modelValidationMessages();
    }
}
