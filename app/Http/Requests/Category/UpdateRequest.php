<?php

namespace App\Http\Requests\Category;

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
            'name' => 'required|string|min:5|unique:categories,name'. $this->route('category')->id .'|max:50',
            'description' => 'nullable|string|max:255'
        ];
    }
}
