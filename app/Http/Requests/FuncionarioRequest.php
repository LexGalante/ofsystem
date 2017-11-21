<?php

namespace OfSystem\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use OfSystem\Funcionario;
use OfSystem\Util\Util;

class FuncionarioRequest extends FormRequest
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
            'cargo_id' => 'required',
            'nome' => 'required|string|between:3, 50',
            'sobrenome' => 'required|string|between:3, 255',
            'logradouro' => 'required|string|between:3, 255',
            'numero' => 'sometimes|nullable|string|between:1, 100',
            'bairro' => 'sometimes|nullable|string|between:3, 200',
            'cidade' => 'sometimes|nullable|string|between:3, 100',
            'cep' => 'sometimes|nullable|string|min:8',
            'uf' => 'sometimes|nullable|string|max:2',
            'admissao' => 'sometimes|nullable|date_format:"d/m/Y"',
            'demissao' => 'sometimes|nullable|date_format:"d/m/Y"',
            'filhos' => 'sometimes|nullable|integer', 
            'situacao' => 'in:A,I',
            'contato.tipo' => 'in:C,T,E,S',
            'contato.contato' => 'string|between:3,250'
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
