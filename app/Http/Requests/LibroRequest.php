<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'titulo' => 'required',
            'anyo' => 'required|numeric|min:1890|max:2023',
            'editorial_id' => 'required|exists:editorials,id',
            'escritor_id' => 'required|exists:escritors,id'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El título es obligatorio',
            'anyo.min' => 'El año no puede ser anterior a 1890',
            'editorial_id.exists' => 'Esa editorial no existe'
        ];
    }
}
