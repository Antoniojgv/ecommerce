<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:250',
            'dni' => 'required|string|unique:clients',
            'address' => 'nullable|string|max:250',
            'phone' => 'string|required|max:50',
            'email' => 'nullable|string|max:250|email:rfc,dns'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El valor es obligatorio',
            'name.max' => 'Solo se permite 250 caracteres',

            'dni.required' => 'El valor es obligatorio',
            'dni.string' => 'el tipo no es correcto',
            'dni.unique' => 'el dni ya existe',

            'address.string' => 'el tipo no es correcto',
            'address.max' => 'supera el máximo de caracteres',

            'phone.string' => 'el tipo no es correcto',
            'phone.max' => 'supera el máximo de caracteres',

            'email.string' => 'el tipo no es correcto',
            'email.max' => 'supera el máximo de caracteres',
            'email.email' => 'debe ser un email',

        ];
    }
}
