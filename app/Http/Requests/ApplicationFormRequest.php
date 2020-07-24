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
            'email' => 'required|email',
            'grade' => 'required|numeric|max:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'name.min'       => 'Informe o nome completo',
            'email'          => 'Informe um email válido',
            'grade.required' => 'O campo nota é obrigatório',
            'grade.numeric'  => 'Informe apenas números no campo de nota',
            'grade.max'      => 'A nota máxima é 10'
        ];
    }
}
