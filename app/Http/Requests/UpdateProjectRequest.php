<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title'         => 'required|max:150|min:5',
            'link'          => 'required|max:150|min:10',
            'type_id'       => 'nullable|exists:types,id',
            'description'   => 'required|max:150|min:10',
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Il titolo del progetto è obbligatorio',
            'title.max'             => 'Il titolo del progetto deve essere lungo al massimo di 150 caratteri',
            'title.min'             => 'Il titolo del progetto deve essere lungo minimo 5 caratteri',
            'link.required'         => 'Il link del progetto è obbligatorio',
            'link.max'              => 'Il link del progetto deve essere lungo al massimo di 150 caratteri',
            'link.min'              => 'Il link del progetto deve essere lungo minimo 10 caratteri',
            'type_id.exists'        => 'Il tipo di progetto selezionato non esiste',
            'description.required'  => 'La descrizione del progetto è obbligatorio',
            'description.max'       => 'La descrizione del progetto deve essere lungo al massimo di 150 caratteri',
            'description.min'       => 'La descrizione del progetto deve essere lungo minimo 10 caratteri',
        ];
    }
}
