<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCategory extends FormRequest
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
            "code"  => "required|unique:hk_category,code_category",
        ];
    }

    public function messages()
    {
        return [
            'code.unique'    => 'ถูกใช้แล้ว',
        ];
    }
}
