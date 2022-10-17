<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
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
            'categoria' => ['required'],
            'descricao' => ['required'],
            'categoria_id' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'categoria.required' => 'O campo categoria é obrigatório.',
            'descricao.required' => 'O campo descrição é obrigatório.',
        ];
    }
}
