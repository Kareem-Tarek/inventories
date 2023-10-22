<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExportedProductRequest extends FormRequest
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
            'title'       => 'required|max:255',
            'description' => 'nullable|max:1020',
            'amount'      => 'required|numeric|max:1020',
        ];
    }
}
