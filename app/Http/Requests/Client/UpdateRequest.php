<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name' => 'required|string|min:10|max:255',
            'cedula' => 'required|unique:clients,cedula,'. $this->route('clients')->id.'|min:6|max:10',
            'ruc' => 'sometimes|nullable|unique:clients,ruc,'. $this->route('clients')->id.'|max:10',
            'email' => 'sometimes|nullable|unique:clients,email,'. $this->route('clients')->id.'|email|max:200',
            'address' => 'nullable|max:255',
            'phone' => 'nullable|max:10'
        ];
    }
}
