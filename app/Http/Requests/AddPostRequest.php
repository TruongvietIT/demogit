<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPostRequest extends FormRequest
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
            'name' => 'required|unique:posts,title',
            'contents' => 'required',
            'images' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tiêu đề tin không được trống',
            'contents.required' => 'Nội dung tin không được trống',
            'images.required'  => 'Hình ảnh không được trống',

        ];
    }
}
