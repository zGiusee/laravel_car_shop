<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
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
            'name' => 'required|max:80',
            'office_number' => 'required|max:30',
            'email' => 'required|max:100',
            'website' => 'max:100',
            'office_address' => 'max:100',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Il nome è obbligatorio.',
            'name.max' => 'Il nome non può superare i :max caratteri.',
            'office_number.required' => 'Il numero di ufficio è obbligatorio.',
            'office_number.max' => 'Il numero di ufficio non può superare i :max caratteri.',
            'email.required' => 'L\'email è obbligatoria.',
            'email.max' => 'L\'email non può superare i :max caratteri.',
            'website.max' => 'Il sito web non può superare i :max caratteri.',
            'office_address.max' => 'L\'indirizzo d\'ufficio non può superare i :max caratteri.',
        ];
    }
}
