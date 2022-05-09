<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name' => 'required|string|min:10|max:255',
            'cedula' => 'required|unique:clients|min:6|max:10',
            'ruc' => 'sometimes|nullable|unique:clients|max:10',
            'email' => 'sometimes|nullable|email|unique:clients|max:200',
            'address' => 'nullable|max:255',
            'phone' => 'nullable|max:10'
        ];
    }
}
