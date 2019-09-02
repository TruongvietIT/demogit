<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassRequest extends FormRequest
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
            'password_old'=>'required',
            'password_new'=>'required',
            'password_confirmation' => 'required|same:password_new',
            ];
    }

    public function messages()
    {
        return [
            'password_old.required' => 'Vui lòng nhập mật khẩu cũ !',
            'password_new.required' => 'Vui lòng nhập mật khẩu mới !',
            'password_confirmation.required' => 'Vui lòng nhập lại mật khẩu mới !',
            'password_confirmation.same' => 'Mật khẩu không khớp !',

        ];
    }


}
