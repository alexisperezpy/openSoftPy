<?php

namespace App\Http\Requests\Product;

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
            'name' => 'required|string|unique:products|max:200',
            'image' => 'required|dimensions:min_width=200,min_height=200',
            'sell_price' => 'required|numeric|between:0.50,999999999999.99',
            'category_id' => 'required|integer|exists:App\Category,id',
            'provider_id' => 'required|integer|exists:App\Provider,id',
        ];
    }
}
