<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestException extends FormRequest
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
            'name' =>'required',
            'age' =>'required',
            'gender' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return
        [
          'name.required' =>'khong duoc de trong',
          'age.required' =>'khong duoc de trong',
          'gender.required' =>'khong duoc de trong',
          'phone.required' =>'khong duoc de trong',
          'address.required' =>'khong duoc de trong',
        ];

    }
}
