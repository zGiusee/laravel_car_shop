<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOptionalRequest extends FormRequest
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
            'name' => 'required|max:100',
            'price' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'Il nome dell\'optional non può essere più lungo di 100 caratteri!',
            'name.required' => 'Il nome dell\'optional è obbligatorio!',
            'price.required' => 'Il prezzo dell\'optional è obbligatorio',
            'price.numeric' => 'Il prezzo dell\'optional deve essere numerico!'
        ];
    }
}
