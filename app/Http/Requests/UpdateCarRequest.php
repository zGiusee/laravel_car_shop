<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
            'price' => 'required|numeric|min:10000|max:50000',
            'model' => 'required|string|max:50',
            'km' => 'nullable|numeric|min:0|max:100000',
            'img' => 'nullable|url',
            'immatricolation_year' => 'nullable|numeric',
            'plate' => 'required|unique:cars',
            'year' => 'required|numeric',
            'color' => 'required|string|max:50',
            'fuel_type' => 'required|string',
            'used' => 'required|boolean',
            'description' => 'nullable|string',
            'seats' => 'required|numeric|min:2|max:7',
            'transmission' => 'required|string',
            'owners' => 'required|numeric|min:0|max:3',
            'engine_size' => 'required|numeric',
            'power' => 'required|string',
            'paint_type' => 'nullable|string',
            'material_type' => 'nullable|string',
        ];
    }
}
