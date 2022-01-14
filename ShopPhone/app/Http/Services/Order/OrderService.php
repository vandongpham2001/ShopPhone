<?php

namespace App\Http\Services\Order;


use App\Models\order;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class OrderService
{
    public function getAllUser(){
        return User::where('id', 1)->get();
    }

    public function show(){
        return order::orderBy('id')->get();
    }
    public  function getAll(){
        return order::orderBy('id')->paginate(10);
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
        $order=order::where('id', $id)->first();
        if ($order){
            return order::where('id', $id)->delete();
        }
        return false;
    }

}