<?php

namespace App\Http\Requests\Users;

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
        return [
            'name'=>'required',
            'NgaySinh'=>'required',
            'SDT'=>'required',
            'DiaChi'=>'required',
          
        ];
    }
    public function messages():array
    {
        return [
            'name.required'=>'Vui lòng nhập tên',
            'NgaySinh.required'=>'Vui lòng nhập Ngày sinh',
            'SDT.required'=>'Vui lòng nhập Số điện thoại',
            'DiaChi.required'=>'Vui lòng nhập địa chỉ', 
        ];
    }
}
