<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOptionalRequest extends FormRequest
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
            'website' => 'required|max:100',
            'office_adress' => 'required|max:100',

        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'Il nome del brand non può essere più lungo di 80 caratteri!',
            'name.required' => 'Il nome del brand è obbligatorio!',
            'office_number.max' => 'Il numero dell\'ufficio non può essere più lungo di 30 caratteri!',
            'office_number.required' => 'Il numero dell\'ufficio è obbligatorio!',
            'email.max' => 'L\'email del brand non può essere più lunga di 100 caratteri!',
            'email.required' => 'L\'email del brand è obbligatoria!',
            'website.max' => 'Il sito del brand non può essere più lungo di 100 caratteri!',
            'website.required' => 'Il sito del brand è obbligatorio!',
            'office_adress.max' => 'L\'indirizzo del brand non può essere più lungo di 100 caratteri!',
            'office_adress.required' => 'L\'indirizzo del brand è obbligatorio!',
        ];
    }
}
