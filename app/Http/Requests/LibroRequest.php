<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
{

    public function authorize(): bool
    {
        return false;
    }


    public function rules(): array
    {
        return [
            'titulo' => 'required',
            'anyo' => 'required|numeric|min:1890|max:2023',
            'editorial_id' => 'required|numeric|min:60|max:220',
            'director_id' => 'required|exists:directors,id'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'El título es obligatorio',
            'anyo.min' => 'El año no puede ser anterior a 1890',
            //...
        ];
    }
}
