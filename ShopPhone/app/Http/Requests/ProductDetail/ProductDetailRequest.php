<?php

namespace App\Http\Requests\ProductDetail;

use Illuminate\Foundation\Http\FormRequest;

class ProductDetailRequest extends FormRequest
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
//            'Pin'=>'required',
//            'CPU'=>'required',
//            'Camera'=>'required',
//            'ManHinh'=>'required'
        ];
    }
//    public function messages():array
//    {
//        return [
//            'CPU.required'=>'Vui lòng Nhập CPU',
//            'Pin.required'=>'Vui lòng Nhập Dung lượng pin',
//            'Camera.required'=>'Vui lòng Nhập Camera',
//            'ManHinh.required'=>'Vui lòng Nhập Màn hình'
//        ];
//    }
}
