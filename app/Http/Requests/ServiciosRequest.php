<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiciosRequest extends FormRequest
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
            'fecha'             => 'required|date',
            'hora'              => 'required',
            'nombre'            => 'required|min:3',
            'apellido'          => 'required|min:3',
            'nombregestor'     => 'required',
            'correogestor'      => 'required|email',
            'contactogestor'    => 'required|numeric'
        ];
    }


    public function messages()
{
    return [
        'nombre.required'    => 'El :attribute es obligatorio.',
        'fecha.required'     => 'Añade un :attribute al producto',
        'hora.required'    => 'El campo :attribute es obligatorio',
        'apellido.required'  => 'El campo :attribute es obligatorio',
        'nombregestor.required' => 'El campo :attribute es obligatorio',
        'contactogestor.required' => 'El campo :attribute es obligatorio',
        'contactogestor.min'        => 'El :attribute debe ser mínimo 8'
    ];
}
}
