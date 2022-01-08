<?php

namespace App\Http\Services\Product;

use App\Models\image;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class ProductClientService
{
    const LIMIT=6;
    public function get(){
//                return product::with('singleImage')->orderBy('id')->limit(self::LIMIT)->get();
        return DB::table('products')
                    ->Join('images', 'images.product_id', '=', 'products.id')
//                    ->select('name', 'products.id', 'image')
                    ->orderBy('id')
                    ->groupBy('products.id', 'name', 'image')
                    ->take(self::LIMIT)
                    ->get(array(
                        'products.id',
                        'name',
                        'image'
                        ));
//        return image::select('id', 'image', 'product_id')->orderBy('id')->limit(self::LIMIT)->get();
//        return DB::select('SELECT p.id, p.name, i.image
//                                FROM products p, images i
//                                WHERE p.id=i.product_id
//                                GROUP BY p.id, p.name, i.image');
    }
    public function getImageProduct($id){
        return image::where('product_id', $id)->first();
    }
}
