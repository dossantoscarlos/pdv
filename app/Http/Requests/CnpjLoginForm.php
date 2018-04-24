<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CnpjLoginForm extends FormRequest
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
            'users' => 'required|numeric|max:10',
            'pass' => 'required|max:10'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'users.required' => 'Usuario é requerido',
            'users.numeric' => 'O usuario invalido use somente numeros',
            'pass.required' => 'Senha é requerido',
            'max' => 'senha ou users incorreta',

        ];
    }

}
