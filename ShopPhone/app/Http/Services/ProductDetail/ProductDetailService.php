<?php

namespace App\Http\Services\ProductDetail;

use App\Models\ProductDetail;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductDetailService
{
    public function getAllProduct(){
        return product::where('status', 1)->get();
    }

    public function getAll(){
        return ProductDetail::with('product')->orderBy('id')->paginate(10);
    }

//    public function getProductDetail($request){
//        $id=(int) $request->input('id');
//        return ProductDetail::where('id', $id)->orderBy('id')->paginate(10);
//    }

    public function create($request){
        try{
            $request->except('_token');
            ProductDetail::create($request->all());
            Session::flash('success', 'Thêm Chi tiết sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function update($request, $productdetail) : bool
    {
        try{
            $productdetail->fill($request->input());
            $productdetail->save();
            Session::flash('success', 'Cập nhật chi tiết sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', 'Cập nhật chi tiết sản phẩm lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function destroy($request){
        $id=(int) $request->input('id');
        $productdetail=ProductDetail::where('id', $id)->first();
        if ($productdetail){
            return ProductDetail::where('id', $id)->delete();
        }
        return false;
    }
    public function search($request){
        $keyword = (string) $request->input('keyword');
        $rs =  DB::table('productdetails')
            ->join('products', 'products.id', 'product_id')
            ->where('products.name', 'like', "%".$keyword."%")
            ->get(['productdetails.id', 'products.name', 'RAM']);

        return count($rs) == 0 ? null : $rs;
    }

}
