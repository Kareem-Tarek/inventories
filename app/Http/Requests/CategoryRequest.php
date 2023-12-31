<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
            'title'       => 'required|string|min:3|max:255|unique:categories,title',
            'description' => 'nullable|min:3',
        ];
    }

    /**
     * @return array
     */
    protected function onUpdate() : array
    {
        return [
            'title'       => 'required|max:255',Rule::unique('categories')->ignore($this->title),
            'description' => 'nullable|min:3',
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
