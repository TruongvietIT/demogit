<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRoom extends FormRequest
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
            'name' => 'required|unique:rooms,name',
            'price' => 'required|numeric',
            'acreage' =>'required',
            'location' =>'required',
            'details' =>'required',
            'images' =>'required',
        ];


    }

    public function messages()
    {
        return [
            'name.required' => 'Tên phòng không được trống',
            'name.unique'  => 'Tên phòng đã tồn tại',
            'price.required'  => 'Giá phòng không được trống',
            'price.numeric'  => 'Giá phòng không đúng định dạng',
            'acreage.required'  => 'Diện tích phòng không được trống',
            'location.required'  => 'Địa chỉ phòng không được trống',
            'details.required'  => 'Mô tả phòng không được trống',
            'images.required'  => 'Hình ảnh không được trống',
        ];
    }
}
