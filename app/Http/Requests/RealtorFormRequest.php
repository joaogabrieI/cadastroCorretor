<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RealtorFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cpf' => ['required', 'digits:11', 'numeric'],
            'creci' => ['required', 'min:2', 'numeric'],
            'name' => ['required', 'min:3'],
        ];
    }

    public function messages()
    {
        return [
            'cpf.required' => 'O campo CPF é obrigatório.',
            'cpf.digits' => 'O campo CPF precisa ter 11 caracteres.',
            'cpf.numeric' => 'O campo CPF precisa ser um número.', 

            'creci.required' => 'O campo CRECI é obrigatório.',
            'creci.min' => 'O campo CRECI precisa ter pelo menos :min caracteres',
            'creci.numeric' => 'O campo CRECI precisa ser um número.',

            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O campo nome precisa ter pelo menos :min caracteres'
        ];
    }
}
