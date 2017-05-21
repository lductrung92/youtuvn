<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'txtRole' => 'required|unique:roles,name,'.$postId,
        ];
    }

    public function messages()
    {
        return [
            'txtRole.required' => '* Bạn chưa nhập tên role',
            'txtRole.unique' => '* Tên role đã tồn tại',
        ];
    }
}
