<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProviderRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:250',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:250',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permite 50 caracteres',

            'email.required' => 'Este campo es requerido',
            'email.string' => 'El valor no es correcto',
            'email.max' => 'Solo se permite 250 caracteres',

            'phone.required' => 'Este campo es requerido',
            'phone.string' => 'El valor no es correcto',
            'phone.max' => 'Solo se permite 20 caracteres',

            'address.string' => 'El valor no es correcto',
            'address.max' => 'Solo se permite 250 caracteres'
        ];
    }
}
