<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */

     protected function onCreate()
    {
        return [
            'title'       => 'required|max:255',
            'description' => 'nullable|max:5',
        ];
    }


    protected function onUpdate()
    {
        return [
            'title'       => 'required|max:255|unique:categories,title',
            'description' => 'nullable|max:5',
        ];
    }

    public function rules()
    {
         return  request()->isMethod('put') || request()->isMethod('patch') ?
             $this->onUpdate() : $this->onCreate();
    }

    public function messages()
    {
        return [
            'title.required'  => 'مطلوب حقل العنوان.',
            'title.unique'    => 'العنوان مأخوذ بالفعل. يرجى تجربة عنوان آخر.',
            'title.max'       => 'عذرا! لقد وصلت إلى الحد الأقصى لعدد الأحرف في حقل العنوان.',
            'description.max' => 'عذرا! لقد وصلت إلى الحد الأقصى لعدد الأحرف في حقل الوصف.',
        ];
    }
}
