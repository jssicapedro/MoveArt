<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Auth;

class PerfilRequest extends FormRequest
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
            'primeiro' => 'required|string|regex:/^[A-ZÀ-úa-z\s]+$/',
            'apelido' => 'required|string|regex:/^[A-ZÀ-úa-z\s]+$/',
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore(Auth::user()->id)],
            'telefone' => 'sometimes|numeric',
            'data_nasc' => 'required|date',
            'cc' => 'sometimes|numeric|digits:9',
            'nif' => 'sometimes|numeric|digits:9',
            'genero' => 'required|in:feminino,masculino,outro,nao_divulgar',
            'localidade' => 'sometimes|string|nullable',
            'rua' => 'sometimes|string|nullable',
            'cod_postal' => 'sometimes|string|nullable',
        ];
    }
}
