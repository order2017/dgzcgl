<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'user_mobile' => 'required|max:11|regex:/^1[34578][0-9]{9}$/',
            'password' => 'required',
            'user_name' => 'required',
            'user_sex' => 'required',
        ];
    }

    public function messages(){
        return [
            'user_mobile.required' => '手机号必填',
            'user_mobile.regex' => '手机号格式错误',
            'user_mobile.max' => '手机号不能大于11位',
            'password.required'  => '密码必填',
            'user_name.required'  => '昵称或者姓名必填',
            'user_sex.required'  => '性别必填',
        ];
    }
}
