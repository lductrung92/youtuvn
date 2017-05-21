<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $postId = $this->route()->parameter('id');
        return [
            'selRole' => 'required',
            'txtName' => 'required',
            'txtEmail' => 'required|email|unique:users,email,'.$postId,
            'txtPass' => 'required|min:6',
            'txtConfirmPass' => 'required|same:txtPass',
        ];
    }

    public function messages()
    {
        return [
            'selRole.required' => '* Bạn chưa chọn role',
            'txtName.required' => '* Bạn chưa nhập họ tên',
            'txtEmail.required' => '* Bạn chưa nhập E-mail',
            'txtEmail.email' => '* Định dạng E-mail không đúng',
            'txtEmail.unique' => '* E-mail đã tồn tại',
            'txtPass.required' => '* Bạn chưa nhập password',
            'txtPass.min' => '* Password quá ngắn',
            'txtConfirmPass.required' => '* Bạn chưa nhập lại password',
            'txtConfirmPass.same' => '* Confirm password không khớp',
        ];
    }
}
