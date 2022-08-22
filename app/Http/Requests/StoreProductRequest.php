<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|unique:products|max:250',
            'description' => 'nullable|string|max:250',
            'image' => 'required|dimensions:min_width:100,min_height:200',
            'price' => 'required',
            'category_id' => 'integer|required|exists:App\Models\Category',
            'provider_id' => 'integer|required|exists:App\Models\Provider',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido',
            'name.unique' => 'Ese nombre de producto ya existe',
            'name.max' => 'Solo se permite 250 caracteres',

            'description.string' => 'El valor no es correcto',
            'description.max' => 'Solo se permite 250 caracteres',

            'image.required' => 'Este campo es requerido',
            'image.dimensions' => 'la imagen es muy pequeña',

            'price.required' => 'Este campo es requerido',

            'category_id.integer' => 'El valor no es correcto',
            'category_id.required' => 'Debe elegir una categoría',
            'category_id.exists' => 'Esta categoría no existe',

            'provider_id.integer' => 'El valor no es correcto',
            'provider_id.required' => 'Debe elegir un proveedor',
            'provider_id.exists' => 'Este proveedor no existe'
        ];
    }
}
