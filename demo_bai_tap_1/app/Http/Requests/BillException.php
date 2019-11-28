<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillException extends FormRequest
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
            'name' => 'required',
            'date' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '*khong duoc bo trong',
            'date.required' => '*khong duoc bo trong'
        ];
    }
}
