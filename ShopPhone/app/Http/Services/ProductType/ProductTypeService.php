<?php

namespace App\Http\Services\ProductType;

use App\Models\Category;
use App\Models\producttype;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductTypeService
{
    public function getAllCategory(){
        return Category::where('status', 1)->get();
    }

    public  function getAll(){
        return producttype::with('category')
            ->orderBy('id')->paginate(10);
    }

    public function create($request){
        try{
            $request->except('_token');
            ProductType::create($request->all());
//            producttype::create([
//                'name'=>(string) $request->input('name'),
//                'description'=>(string) $request->input('description'),
//                'status'=>(string) $request->input('status'),
//                'category_id'=>(string) $request->input('category_id')
//            ]);
            Session::flash('success', 'Tạo loại sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function update($request, $productType) : bool
    {
//        $isValidPrice=$this->isValidPrice($request);
//        if ($isValidPrice===false)
//            return false;
        try{
            $productType->fill($request->input());
            $productType->save();
            Session::flash('success', 'Cập nhật loại sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', 'Cập nhật loại sản phẩm lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request){
        $id=(int) $request->input('id');
        $productType=producttype::where('id', $id)->first();
        if ($productType){
            return producttype::where('id', $id)->delete();
        }
        return false;
    }

    public function search($request){
        $keyword = (string) $request->input('keyword');
        $rs =  DB::table('producttypes')
            ->join('categories', 'categories.id', 'category_id')
            ->where('name', 'like', "%".$keyword."%")
            ->get(['producttypes.id', 'producttypes.name', 'description', 'status', 'categories.name']);

        return count($rs) == 0 ? null : $rs;
    }
}
