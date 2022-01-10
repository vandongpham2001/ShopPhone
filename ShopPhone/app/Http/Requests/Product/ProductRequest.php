<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'NhaSX'=>'required',
            'ThoiGianBaoHanh'=>'required',
            'status'=>'required',
            'category_id'=>'required'
        ];
    }

    public function messages():array
    {
        return [
            'name.required'=>'Vui lòng nhập tên sản phẩm',
            'NhaSX.required'=>'Vui lòng nhập nhà sản xuất',
            'ThoiGianBaoHanh.required'=>'Vui lòng nhập thời gian bảo hành'
        ];
    }
}
