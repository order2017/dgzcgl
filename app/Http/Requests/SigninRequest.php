<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
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
            'user_mobile' => 'exists:users',
            'password' => 'required|min:6',
        ];
    }

    public function messages(){
        return [
            'user_mobile.required' => '手机号必填',
            'user_mobile.exists' => '手机号不存在或者无权访问',
            'user_mobile.regex' => '手机号格式错误',
            'user_mobile.max' => '手机号不能大于11位',
            'password.required'  => '手机号或密码错误',
        ];
    }
}
