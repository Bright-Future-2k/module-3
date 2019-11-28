<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'name'=>'required|min:2|max:10',
//            'age'=>'required|numeric|min:18'
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Can dien ten',
            'name.min'=>'phai dien tren 2 ki tu',
            'name.max'=>'khong dien qua 10 ki tu',
//            'age.required'=>'Can dien so tuoi',
//            'age.numeric'=>'can dien so',
//            'age.min'=>'tuoi phai lon hon 18'
        ];
    }
}
