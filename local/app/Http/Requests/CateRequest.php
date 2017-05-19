<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'txtName' => 'required|unique:categories,title,'.$postId,
        ];
    }

    public function messages()
    {
        return [
            'txtName.required' => '* Bạn chưa nhập tên thể loại',
            'txtName.unique' => '* Tên thể loại đã tồn tại',
        ];
    }
}
