<?php

namespace Edu\Permission\Requests\AdminUser;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminUserRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           "username" => "required|unique:admin_user|max:30",
           "name" => "required",
           "password" => "required|min:6",
           "mobile" => "required",
           "roleIds" => "required"
        ];
    }

    /**
     * 配置验证实例
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        if ($validator->errors()->all()) {
            return;
        }
        $password =$this->input('password');
        $validator->after(function ($validator) use($password) {
            $password = bcrypt($password);
            $this->merge([
                'password'=>$password
            ]);
        });
    }
}
