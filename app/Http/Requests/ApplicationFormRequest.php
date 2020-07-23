<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'  => 'required|min:3',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "O campo nome é obrigatório",
            'email.required' => "O campo email é obrigatório",
            'name.min' => "Informe o nome completo",
            'email'    => 'Informe um email válido'
        ];
    }
}
