<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelephoneRequest extends FormRequest
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
            'title.required'=> 'Preencha o título',
            'title.max'=> 'título deve ter até 20 caracteres',
            'ddi.required'=> 'Preencha o ddi',
            'ddd.required'=> 'Preencha o ddd',
            'phone.required'=> 'Preencha o número'
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
            'title'=>'required|max:20',
            'ddi'=>'required',
            'ddd'=>'required',
            'phone'=>'required',
        ];
    }
}
