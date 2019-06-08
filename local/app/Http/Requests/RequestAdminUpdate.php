<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAdminUpdate extends FormRequest
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
//            "password"  => "min:8",
            'confirmPassword' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'confirmPassword.same'    => 'กรุณาใส่ข้อมูลรหัสผ่าให้ตรงกัน',
        ];
    }
}
