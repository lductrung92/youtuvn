<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YoutubeRequest extends FormRequest
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
            'selCate' => 'required',
            'txtTitle' => 'required|unique:youtubes,title,'.$postId,
            'txtLink' => 'required',
            'timeCreated' => 'required|date',
            'id_video' => 'required',
            'textDes' => 'required',
            'txtKeyword' => 'required',
            'time_video' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'selCate.required' => '* Danh mục không được để trống',
            'txtTitle.required' => '* Tiêu đề không được để trống',
            'txtTitle.unique' => '* Tiêu đề đã tồn tại',
            'txtLink.required' => '* Link custom không được để trống',
            'id_video.required' => '* ID video không được để trống',
            'timeCreated.required' => '* Ngày đăng không thể để trống',
            'timeCreated.date' => '* Kiểu date ông nội',
            'textDes.required' => '* Mô tả không thể để trống',
            'txtKeyword.required' => '* Keyword không thể để trống',
            'time_video.required' => '* Thời lượng video không thể rỗng'
        ];
    }
}
