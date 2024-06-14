<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'language' => 'sometimes|required|string|max:255',
            'cast' => 'sometimes|required|string',
            'director' => 'sometimes|required|string|max:255',
            'genre' => 'sometimes|required|string|max:255',
            'duration' => 'sometimes|required|integer|min:1',
        ];
    }
}
