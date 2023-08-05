<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages(){
        return [
            'name.required'=> 'Preencha o nome',
            'name.max'=> 'Nome deve ter até 255 caracteres',
            'email.required'=> 'Preencha o e-mail',
            'email.email'=> 'Preencha um e-mail válido',
            'email.max'=> 'E-mail deve ter até 255 caracteres',
            'address.required'=> 'Preencha o endereço'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'address'=>'required'
        ];
    }
}
