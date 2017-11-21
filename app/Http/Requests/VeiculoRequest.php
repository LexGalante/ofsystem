<?php

namespace OfSystem\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use OfSystem\Util\Util;

class VeiculoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cliente_id' => 'required',
            'marca_id' => 'required',
            'cor_id' => 'required',
            'nome' => 'required|string|between:3,100',
            'placa' => 'required|unique:veiculos|string|between:5,200',
            'ano' => 'sometimes|nullable|date_format:"Y"',
            'modelo' => 'sometimes|nullable|date_format:"Y"',
            'renavam' => 'sometimes|nullable|between:3,20',
            'chassi' => 'sometimes|nullable|between:3,100',
            'situacao' => 'in:A,I'
        ];
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
