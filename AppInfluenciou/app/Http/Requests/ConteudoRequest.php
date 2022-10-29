<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConteudoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'modulo_id' => 'required',
            'titulo' => 'required',
            'descricao' => 'required',
            'link' => 'required',
            'gratuito' => 'required',
        ];
    }
}
