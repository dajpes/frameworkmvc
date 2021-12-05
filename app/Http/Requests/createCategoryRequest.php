<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createCategoryRequest extends FormRequest
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
            'name' => 'required|string|max:120|min:3',
            'description' => 'required|string|max:250|min:3',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nombre de la categoria es requerido',
            'name.string' => 'Solo se acepta texto',
            'description.string' => 'Solo se acepta texto',
            'name.max' => 'Maximo 120 caracteres',
            'name.min' => 'Minimo 3 caracteres',
            'description.max' => 'Maximo 250 caracteres',
            'description.min' => 'Minimo 3 caracteres',
            'description.required' => 'Descripcion no puede estar vacio',
        ];
    }
}
