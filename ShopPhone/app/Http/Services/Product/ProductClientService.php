<?php

namespace App\Http\Services\Product;

use App\Models\image;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class ProductClientService
{
    const LIMIT=2;
    public function get(){
//        return product::select('id', 'name')->orderBy('id')->limit(self::LIMIT)->get();
        return DB::table('images')
                    ->join('products', 'images.product_id', '=', 'products.id')
                    ->orderBy('id')

                    ->take(self::LIMIT)
                    ->get(array(
                        'products.id',
                        'products.name',
                        'image'
                    ));
//        return image::select('id', 'image', 'product_id')->orderBy('id')->limit(self::LIMIT)->get();
    }
    public function getImageProduct($id){
        return image::where('product_id', $id)->first();
    }
}
