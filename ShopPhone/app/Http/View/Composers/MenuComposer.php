<?php

namespace App\Http\View\Composers;

use App\Models\category;
use App\Models\producttype;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MenuComposer
{

    protected $users;

    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $categories = category::select('id', 'name', 'parent_id')->where('status', 1)->orderBy('id')->get();
//        $producttypes=producttype::select('id', 'name', 'category_id')->where('status', 1)->orderBy('id')->get();
        $listProducts=DB::table('products')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('ordersdetails', 'ordersdetails.productDetail_id', '=', 'productdetails.id')
            ->orderBy(DB::raw('sum(\'ordersdetails.soLuong\')'))
            ->groupBy('productdetails.id')
            ->take(3)
            ->get(array(
                'productdetails.id'
            ));

        $productId=array_keys((array)$listProducts);

        $topProducts = DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->whereIn('productdetails.id', $productId)
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));

        $view->with('categories', $categories)->with('topProducts', $topProducts);
    }
}
