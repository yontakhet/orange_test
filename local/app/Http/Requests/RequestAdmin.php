<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAdmin extends FormRequest
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
            "email"  => "required|email|unique:system_admin,email",
            "password"  => "required|min:8",
            'confirmPassword' => 'required|same:password|min:8',
        ];
    }

    public function messages()
    {
        return [
            'email.required'    => 'กรุณาใส่ข้อมูล email',
            'email.email'    => 'กรุณาใส่รูปแบบ ผู้ใช้งาน เป็น e-mail',
            'email.unique'    => 'email นี้มีผู้ใช้แล้ว',
            'password.required'    => 'กรุณาใส่ข้อมูล password',
            'password.min'    => 'กรุณาใส่ข้อมูลรหัสผ่านอย่างน้อย 8 ตัวอักษร',
            'confirmPassword.same'    => 'กรุณาใส่ข้อมูลรหัสผ่าให้ตรงกัน',
        ];
    }
}
