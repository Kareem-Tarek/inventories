<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NamePriceRequest extends FormRequest
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
            'name' => 'required|string|max:255',
        ];
    }

    /**
     * @return array
     */
    protected function onUpdate() : array
    {
        return [
            'name' => 'required|string|max:255',
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
