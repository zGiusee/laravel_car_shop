<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
    public function messages()
    {
        return [
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'price.min' => 'Il prezzo deve essere almeno :min.',
            'price.max' => 'Il prezzo non può superare :max.',
            'model.required' => 'Il modello è obbligatorio.',
            'plate.required' => 'La targa è obbligatoria.',
            'plate.unique' => 'La targa inserita è già utilizzata.',
            'year.required' => 'L\'anno è obbligatorio.',
            'year.numeric' => 'L\'anno deve essere un numero.',
            'color.required' => 'Il colore è obbligatorio.',
            'fuel_type.required' => 'Il tipo di carburante è obbligatorio.',
            'used.required' => 'Specificare se il veicolo è usato o no.',
            'used.boolean' => 'Il campo usato deve essere vero o falso.',
            'seats.required' => 'Il numero di posti è obbligatorio.',
            'seats.numeric' => 'Il numero di posti deve essere un numero.',
            'seats.min' => 'Il numero minimo di posti è :min.',
            'seats.max' => 'Il numero massimo di posti è :max.',
            'transmission.required' => 'Il tipo di trasmissione è obbligatorio.',
            'owners.required' => 'Il numero di proprietari è obbligatorio.',
            'owners.numeric' => 'Il numero di proprietari deve essere un numero.',
            'owners.min' => 'Il numero minimo di proprietari è :min.',
            'owners.max' => 'Il numero massimo di proprietari è :max.',
            'engine_size.required' => 'La cilindrata del motore è obbligatoria.',
            'engine_size.numeric' => 'La cilindrata del motore deve essere un numero.',
        ];
    }
    
}
