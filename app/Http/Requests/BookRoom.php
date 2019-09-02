<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRoom extends FormRequest
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
        $hous = 1;
        return [
            'start_time'    => 'required|date|after_or_equal:time_now',
            'finish_time'      => 'required|date|after_or_equal:start_time',
//            'finish_time'      => 'after_or_equal:1',
        ];
    }

    public function messages()
    {
        return [
            'finish_time.after_or_equal' => 'Thời gian kết thúc phải lớn hớn thời gian bắt đầu',
            'start_time.after_or_equal' => 'Thời gian bắt đầu phải lớn hớn hoặc bằng thời gian hiện tại',

        ];
    }
}
