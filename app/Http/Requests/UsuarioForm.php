<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::checked())
        {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_completo' => 'required',
            'cpf' => 'required',
            'cep_id' =>  'required',
            'residencia_numero' => 'required',
            'complemento' => 'required',
            'sexo' =>  'required',
            'status_civil' =>  'required',
            'fixo' =>  'required',
            'celular' =>  'required',
            'email' =>  'required'
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
            'required' => 'campo é requerido',
        ];
    }

}
