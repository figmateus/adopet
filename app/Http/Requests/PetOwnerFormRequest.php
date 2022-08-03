<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetOwnerFormRequest extends FormRequest
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
        return $rules = [
            'name' => 'required|string|max:50|min:3',
            'email' => 'required|email|unique:users,email,{$id},id|unique:pet_owners,email,{$id},id',
            'phone' => 'required|numeric|min:11',
            'street' => 'required|string',
            'neighbor' => 'required|string|min:4',
            'number' => 'required|numeric',
            'city' => 'required|string|min:3',
            'state' => 'required|string',
            'cep' => 'required|numeric|min:8',
            'cpf-cnpj' => 'required|numeric|min:11',
            'password' => 'required|min:4|max:15'
        ];
    }
}
