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
            'price' => 'required|numeric',
            'model' => 'required|max:50',
            'km' => 'numeric',
            // 'img' => 'nullable|url',
            'immatricolation_year' => 'numeric',
            'plate' => 'unique:cars',
            'year' => 'required|numeric',
            'color' => 'required|max:50',
            'fuel_type' => 'required|string', //eletrr ibrida benzina diesel
            'used' => 'required|boolean', //option vl 1 si vl 2 no
            'description' => 'string',
            'seats' => 'required|numeric|min:2',
            'transmission' => 'required|string',
            'owners' => 'numeric',
            'engine_size' => 'required|numeric',
            'power' => 'required|string',
            'paint_type' => 'nullable|string',
            'material_type' => 'nullable|string',
            'brand_id' => 'required|exists:brands,id',
            'power' => 'required',
            // 'paint_type' => 'nullable',
            // 'material_type' => 'nullable|string',
            'img' => 'image|mimes:jpg,png,jpeg|max:2048'
            
        ];
    }
    public function messages()
    {
        return [
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            // 'price.min' => 'Il prezzo deve essere almeno :min.',
            // 'price.max' => 'Il prezzo non può superare :max.',
            'model.required' => 'Il modello è obbligatorio.',
            'plate.required' => 'La targa è obbligatoria.',
            'plate.unique' => 'La targa inserita è già utilizzata.',
            'year.required' => 'L\'anno è obbligatorio.',
            'year.numeric' => 'L\'anno deve essere un numero.',
            'color.required' => 'Il colore è obbligatorio.',
            'fuel_type.required' => 'Il tipo di carburante è obbligatorio.',
            'used.required' => 'Specificare se il veicolo è usato o no.',
            // 'used.boolean' => 'Il campo usato deve essere vero o falso.',
            'seats.required' => 'Il numero di posti è obbligatorio.',
            'seats.numeric' => 'Il numero di posti deve essere un numero.',
            'seats.min' => 'Il numero minimo di posti è 2.',
            // 'seats.max' => 'Il numero massimo di posti è :max.',
            'transmission.required' => 'Il tipo di trasmissione è obbligatorio.',
            'owners.required' => 'Il numero di proprietari è obbligatorio.',
            'owners.numeric' => 'Il numero di proprietari deve essere un numero.',
            // 'owners.min' => 'Il numero minimo di proprietari è :min.',
            // 'owners.max' => 'Il numero massimo di proprietari è :max.',
            'engine_size.required' => 'La cilindrata del motore è obbligatoria.',
            'engine_size.numeric' => 'La cilindrata del motore deve essere un numero.',
            'brand_id.required' => 'Seleziona di quale brand è la macchina!',
            'power.required' => 'La potenza del motore deve essere specificata',
            'img.image' => 'Il file caricato deve essere un\'immagine.',
            'img.mimes' => 'L\'immagine caricata deve essere in formato .jpg, .png o .jpeg.',
            'img.max' => 'L\'immagine non può superare i 2048 kilobytes.'
        ];
    }
}
