<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class OrderdetailRequest extends FormRequest
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
            'soLuong'=>'required',
            'giaMua'=>'required',
            
        ];
    }

    public function messages():array
    {
        return [
            'soLuong.required'=>'Vui lòng nhập số lượng',
            'giaMua.required'=>'Vui lòng nhập giá mua',
            
        ];
    }
}
