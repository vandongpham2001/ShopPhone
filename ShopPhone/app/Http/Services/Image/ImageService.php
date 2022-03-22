<?php

namespace App\Http\Services\Image;

use App\Models\image;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ImageService
{
    public function getAllProduct(){
        return product::with('category')
            ->orderBy('id')->paginate(10);
    }

    public function getAll(){
        return image::with('product')->orderBy('id')->paginate(10);
    }
    public function create($request){
        try{
            $request->except('_token');
            image::create($request->all());
            Session::flash('success', 'Thêm ảnh sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function update($request, $image) : bool
    {
        try{
            $image->fill($request->input());
            $image->save();
            Session::flash('success', 'Cập nhật ảnh sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', 'Cập nhật ảnh sản phẩm lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request){
        $id=(int) $request->input('id');
        $image=image::where('id', $id)->first();
        if ($image){
            return image::where('id', $id)->delete();
        }
        return false;
    }

    public function search($request){
        $keyword = (string) $request->input('keyword');
        $rs =  DB::table('images')
            ->join('products', 'products.id', 'product_id')
            ->where('products.name', 'like', "%".$keyword."%")
            ->get(['images.id', 'products.name', 'hinhAnh']);

        return count($rs) == 0 ? null : $rs;
    }

}
