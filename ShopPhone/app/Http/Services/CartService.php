<?php

namespace App\Http\Services;

use App\Jobs\SendMail;
use App\Models\order;
use App\Models\ordersdetail;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartService
{
    public function create($request){
//        dd($request);
        $quantity = (int) $request->input('add');
        $product_id=(int) $request->input('productdetail_id');
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
            ->whereIn('productdetails.id', $productId)
            ->groupBy('products.id')
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));
//        dd($carts);
    }

    public function update($request){
        Session::put('carts', $request->input('num_product'));

        return true;
    }

    public function remove($id){
        $carts=Session::get('carts');
        unset($carts[$id]);
        Session::put('carts', $carts);
        return true;
//        dd($carts);
    }

    public function addCart($request){
        try{
            DB::beginTransaction();
//            Session::forget('carts');
            $carts=Session::get('carts');
//            dd($carts);
            if (is_null($carts))
                return false;

            $user=User::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'DiaChi'=>$request->input('address'),
                'SDT'=>$request->input('phone')
            ]);

            $order=order::create([
                'address'=>$request->input('address'),
                'sdt'=>$request->input('phone'),
                'status'=>'Chờ duyệt',
                'user_id'=>$user->id
            ]);

        $this->infoProductCart($carts, $order->id);

        DB::commit();

        Session::flash('success', 'Đặt hàng thành công');

        #Queue
        SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(2));

//        Session::flush();
        Session::forget('carts');
        }
        catch (\Exception $err){
            DB::rollBack();
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }
    protected function infoProductCart($carts, $order_id){
        $productId=array_keys($carts);
        $products=DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->where('products.status', '=', 1)
            ->whereIn('productdetails.id', $productId)
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));
//        dd($products);
        $data=[];
        foreach ($products as $product){
            $data[]=[
                'order_id'=>$order_id,
                'productDetail_id'=>$product->id,
                'soLuong'=>$carts[$product->id],
                'giaMua'=>$product->DonGia
            ];
        }
//        dd($data);
        return ordersdetail::insert($data);

    }
}
