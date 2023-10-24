<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return string[]
     */
    protected function onCreate() : array
    {
        return [

            'title'           => 'required|string|min:3|max:255,unique:products,id',
            'description'     => 'required|string|min:3',
            'quantity'        => 'required|integer',
            'unit_id'         => 'nullable|integer|exists:units,id',
            'category_id'     => 'nullable|integer|exists:categories,id',
            'sub_category_id' => 'nullable|integer|exists:sub_categories,id',
            'type_id'         => 'nullable|integer|exists:types,id',
            'company_id'      => 'nullable|integer|exists:companies,id',
            'warning'         => 'nullable|integer',
//            'value'           => 'required',
        ];
    }

    /**
     * @return array
     */
    protected function onUpdate() : array
    {
        return [
            'title'           => 'required|max:255,unique:products,id'.$this->id,
            'description'     => 'required|string|min:3',
            'quantity'        => 'required|integer',
            'unit_id'         => 'nullable|integer|exists:units,id',
            'category_id'     => 'nullable|integer|exists:categories,id',
            'sub_category_id' => 'nullable|integer|exists:sub_categories,id',
            'type_id'         => 'nullable|integer|exists:types,id',
            'company_id'      => 'nullable|integer|exists:companies,id',
            'warning'         => 'nullable|integer',
//            'value'           => 'required|integer',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() : array
    {
        return request()->isMethod('put') || request()->isMethod('patch') ?
            $this->onUpdate() : $this->onCreate();
    }
}
