<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' =>'required|min:2',
            'age' =>'required|max:100'
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'k dc de trong',
            'name.min' =>'k nho hon 2 ki tu'
        ];
    }
}
