<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{

    public function authorize(): bool
{
    return true;
}

public function rules(): array
{
    return [
        'title' => 'required|min:3',
        'author' => 'required|min:3',
        'body' => 'required|min:10',
        'img' => 'nullable'
    ];
}

public function messages()
{
    return [
        'title.required' => 'Non hai inserito il titolo',
        'title.min' => 'Il titolo deve avere almeno :min caratteri',
        'author.required' => 'Non hai inserito l\'autore',
        'author.min' => 'L\'autore deve avere almeno :min caratteri',
        'body.required' => 'Non hai inserito il testo',
        'body.min' => 'Il testo deve avere almeno :min caratteri',
        'img.image' => 'Il file caricato deve essere un\'immagine',
        'img.mimes' => 'Formati ammessi: jpg, jpeg, png, webp',
        'img.max' => 'L\'immagine non può superare i 2 MB',
    ];
}

}
