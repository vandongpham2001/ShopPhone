<?php

namespace App\Http\Services\ProductType;

use App\Models\Category;
use App\Models\producttype;
use Illuminate\Support\Facades\Session;

class ProductTypeService
{
    public function getCategory(){
        return Category::where('status', 1)->get();
    }
    public function create($request){
        try{
            $request->except('_token');
//            ProductType::create($request->all());
            producttype::create([
                'name'=>(string) $request->input('name'),
                'description'=>(string) $request->input('description'),
                'status'=>(string) $request->input('active'),
                'category_id'=>(string) $request->input('category_id')
            ]);
            Session::flash('success', 'Tạo loại sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
}
