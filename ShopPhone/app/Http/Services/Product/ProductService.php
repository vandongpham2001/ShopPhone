<?php

namespace App\Http\Services\Product;

use App\Models\category;
use App\Models\product;
use App\Models\producttype;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductService
{
    public function getAllProductType(){
        return producttype::where('status', 1)->get();
    }

    public function getAllCategory(){
        return Category::where('status', 1)->get();
    }

    public  function getAll(){
        return product::with('producttype')
            ->orderBy('id')->paginate(10);
    }

    public function create($request){
        try{
            $request->except('_token');
            Product::create($request->all());
//            producttype::create([
//                'name'=>(string) $request->input('name'),
//                'description'=>(string) $request->input('description'),
//                'status'=>(string) $request->input('status'),
//                'category_id'=>(string) $request->input('category_id')
//            ]);
            Session::flash('success', 'Tạo sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function update($request, $product) : bool
    {
//        $isValidPrice=$this->isValidPrice($request);
//        if ($isValidPrice===false)
//            return false;
        try{
            $product->fill($request->input());
            $product->save();
            Session::flash('success', 'Cập nhật sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', 'Cập nhật sản phẩm lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request){
        $id=(int) $request->input('id');
        $product=product::where('id', $id)->first();
        if ($product){
            return product::where('id', $id)->delete();
        }
        return false;
    }

    public function search($request){
        $keyword = (string) $request->input('keyword');
        $rs =  DB::table('products')
            ->join('productTypes', 'productTypes.id', 'productType_id')
            ->where('name', 'like', "%".$keyword."%")
            ->get(['products.id', 'products.name', 'NhaSX', 'ThoiGianBaoHanh', 'status', 'productTypes.name']);

        return count($rs) == 0 ? null : $rs;
    }
}
