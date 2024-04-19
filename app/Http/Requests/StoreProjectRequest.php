<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'description' => 'required|text',
            'cover_image' => 'nullable|string',
            'technologies_used' => 'required|string',
            'github_link' => 'required|string',
        ];
    }

    public function messages(): array 
    {
        return [
            'name.required' => 'Inserisci un Titolo',
            'description.required' => 'Inserisci una Descrizione',
            'technologies_used.required' => 'Inserisci almeno una tecnologia usata',
            'github_link.required' => 'Inserisci il link alla repo di GitHub',

            'max' => 'Il campo :attribute deve avere massimo :max caratteri',
        ];
    }
}
