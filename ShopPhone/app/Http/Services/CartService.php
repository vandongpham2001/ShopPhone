<?php

namespace App\Http\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartService
{
    public function create($request){
//        dd($request);
        $quantity = (int) $request->input('add');
        $product_id=(int) $request->input('product_id');
        if ($quantity<=0 || $product_id<=0){
            Session::flash('error', 'Số lượng hoặc sản phẩm không hợp lệ');
            return false;
        }

        $carts=Session::get('carts');
//        dd($carts);
        if (is_null($carts)){
            Session::put('carts', [
                $product_id=>$quantity
            ]);
            return true;
        }

        $exists=Arr::exists($carts, $product_id);
        if ($exists){
            $carts[$product_id]=$carts[$product_id]+$quantity;
            Session::put('carts', $carts);
            return true;
        }
//        dd($carts);
        $carts[$product_id]=$quantity;
        Session::put('carts', $carts);
        return true;


    }

    public function getProduct(){
        $carts=Session::get('carts');
        if (is_null($carts)){
            return [];
        }
//        dd($carts);
        $productId=array_keys($carts);
//        dd($productId);
        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->where('products.status', '=', 1)
            ->whereIn('products.id', $productId)
            ->get(array(
                'products.id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));
//        dd($carts);
    }
}
