<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() : array
    {
        return [
            'price'         => 'required|numeric',
            'discount'      => 'required|numeric',
            'product_id'    => 'required|exists:products,id',
            'name_price_id' => 'required|exists:name_prices,id',
        ];
    }
}
