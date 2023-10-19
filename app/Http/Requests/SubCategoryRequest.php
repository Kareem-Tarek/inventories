<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'title'       => 'required|string|min:3|max:255',
            'description' => 'nullable|min:3',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    /**
     * @return array
     */
    protected function onUpdate() : array
    {
        return [
            'title'       => 'required|max:255',
            'description' => 'nullable|min:3',
            'category_id' => 'required|exists:categories,id',
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
