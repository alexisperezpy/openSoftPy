<?php

namespace App\Http\Requests\Provider;

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
            'name' => 'required|string|min:5|max:',
            'email' => 'required|email|unique:providers|max:200',
            'ruc' => 'required|string|unique:providers|min:8|max:10',
            'address' => 'nullable|string|min:10|max:255',
            'phone' => 'required|numeric|min:9|max:15',
        ];
    }
}
