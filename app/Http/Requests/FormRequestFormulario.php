<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestFormulario extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required|min:3|max:255'
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email deve ser do tipo email.',
            'mensagem.required' => 'O campo mensagem é obrigatório.',
            'mensagem.min' => 'O campo mensagem deve ter no mínimo 3 letras',
            'mensagem.max' => 'O campo mensagem deve ter no máximo 255 letras'
        ];
        
    }
}
