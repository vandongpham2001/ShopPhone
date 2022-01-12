<?php

namespace App\Http\View\Composers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartComposer
{
    protected $users;

    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $carts=Session::get('carts');
        if (is_null($carts)){
            return [];
        }

        $productId=array_keys($carts);

        $products= DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->where('products.status', '=', 1)
            ->whereIn('products.id', $productId)
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));
        $view->with('products', $products);
    }
}
