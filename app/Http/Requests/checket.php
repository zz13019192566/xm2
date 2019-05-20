<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class checket extends FormRequest
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
        'uname' => 'required|unique:admin|regex:/^\w{6,12}$/',
        'tel' =>    'required|regex:/^1[3456789]\d{9}$/',
        'password' => 'required|regex:/^\w{8,16}$/',
        'password1' => 'same:password'
        ];
    }


    public function messages()
{
    return [
        'uname.required' => '用户名不能为空',
        'uname.regex' => '用户名格式不正确',
        'uname.unique' => '用户名已经存在',
        'tel.required' => '手机号不能为空',
        'tel.regex' => '手机号码格式不正确',
        'password.regex'=> '密码名格式不正确',
        'password.required' => '密码不能为空',
        'password1.same' => '两次密码不一致',
    ];
}
}
