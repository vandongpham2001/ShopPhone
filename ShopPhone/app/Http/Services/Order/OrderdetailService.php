<?php

namespace App\Http\Services\Order;

use App\Models\ordersdetail;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderdetailService
{

    public function show(){
        return ordersdetail::orderBy('order_id')->get();
    }
    public  function getAll(){
        return ordersdetail::with('order')->orderBy('order_id')->paginate(20);
    }
    public  function getAlldetail(){
        return ordersdetail::orderBy('id')->paginate(20);
    }

    public  function getAllProductByDetail(){
        return DB::table('ordersdetails')
            ->join('productdetails', 'productdetails.id', '=', 'ordersdetails.productDetail_id')
            ->join('products', 'products.id', '=', 'productdetails.product_id')
            ->orderBy(DB::raw('sum(\'ordersdetails.soLuong\')'))
            ->groupBy('ordersdetails.productDetail_id')
            ->get(array(
                'products.name',
//                'soLuong',
                DB::raw('sum(\'ordersdetails.soLuong\') as soLuong'),
                'giaMua',
                'ROM',
                'RAM',
                'CPU',
                'Color'

            ));
    }

    public  function getAlldetailNoPaginate(){
        return ordersdetail::orderBy('id')->get();
    }

    public function update($request, $order) : bool
    {
        try{
            $order->fill($request->input());
            $order->save();
            Session::flash('success', 'Cập nhật đơn hàng thành công');
        }
        catch (\Exception $err){
            Session::flash('error', 'Cập nhật đơn hàng lỗi');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function destroy($request){
        $id=(int) $request->input('id');
        $order=ordersdetail::where('id', $id)->first();
        if ($order){
            return ordersdetail::where('id', $id)->delete();
        }
        return false;
    }
}
