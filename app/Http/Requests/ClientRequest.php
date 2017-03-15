<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'client_mobile' => 'required|max:11|regex:/^1[34578][0-9]{9}$/',
            'client_name' => 'required',
            'info_quota' => 'required',
        ];
    }

    public function messages(){
        return [
            'client_mobile.required' => '手机号必填',
            'client_mobile.regex' => '手机号格式错误',
            'client_mobile.max' => '手机号不能大于11位',
            'client_name.required'  => '客户姓名必填',
            'info_quota.required'  => '贷款额度必填',
        ];
    }
}
