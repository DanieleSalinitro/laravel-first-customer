<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHallRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'seats' => 'required|integer|min:1',
            'isense' => 'required|boolean',
            'base_price' => 'required|numeric|min:0',
        ];
    }
}