<?php

namespace App\Http\Services\Banner;

use App\Models\banner;
use Illuminate\Support\Facades\Session;

class BannerService
{

    public function show(){
        return banner::orderBy('id')->get();
    }

    public  function getAll(){
        return banner::orderBy('id')->paginate(10);
    }

    public function create($request){
        try{
            $request->except('_token');
            banner::create($request->all());
            Session::flash('success', 'Tạo sản phẩm thành công');
        }
        catch (\Exception $err){
            Session::flash('error', $err->getMessage());
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function update($request, $banner) : bool
    {
        try{
            $banner->fill($request->input());
            $banner->save();
            Session::flash('success', 'Cập nhật banner thành công');
        }
        catch (\Exception $err){
            Session::flash('error', 'Cập nhật banner lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function destroy($request){
        $id=(int) $request->input('id');
        $product=banner::where('id', $id)->first();
        if ($product){
            return banner::where('id', $id)->delete();
        }
        return false;
    }

    public function search($request){
        $keyword = (string) $request->input('keyword');
        $rs =  DB::table('banners')
            ->where('noiDung', 'like', "%".$keyword."%")
            ->get(['banners.id', 'noiDung', 'hinhAnh']);

        return count($rs) == 0 ? null : $rs;
    }
}
