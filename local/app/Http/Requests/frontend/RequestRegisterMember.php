<?php

namespace App\Http\Requests\frontend;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegisterMember extends FormRequest
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
            "email_member"  => "required|email|unique:hk_member,email_member",
            "password_member"  => "required|min:8",
            're_password_member' => 'required|same:password_member|min:8',
        ];
    }

    public function messages()
    {
        return [
            'email_member.required'    => 'กรุณาใส่ข้อมูล email',
            'email_member.email'    => 'กรุณาใส่รูปแบบ ผู้ใช้งาน เป็น e-mail',
            'email_member.unique'    => 'email นี้มีผู้ใช้แล้ว',
            'password_member.required'    => 'กรุณาใส่ข้อมูล password',
            'password_member.min'    => 'กรุณาใส่ข้อมูลรหัสผ่านอย่างน้อย 8 ตัวอักษร',
            're_password_member.same'    => 'กรุณาใส่ข้อมูลรหัสผ่าให้ตรงกัน',
        ];
    }
}
