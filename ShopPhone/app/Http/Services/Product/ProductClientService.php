<?php

namespace App\Http\Services\Product;

use App\Models\image;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class ProductClientService
{
    const LIMIT=6;
    public function getPhone(){
//                return product::with('singleImage')->orderBy('id')->limit(self::LIMIT)->get();
        return DB::table('products')
                    ->join('images', 'images.product_id', '=', 'products.id')
                    ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
                    ->join('producttypes', 'producttypes.id', '=', 'products.productType_id')
                    ->join('categories', 'categories.id', '=', 'producttypes.category_id')
                    ->where('categories.id', '=', 1)
//                    ->select('name', 'products.id', 'image')
                    ->orderBy('id')
//                    ->groupBy('products.id', 'products.name', 'DonGia')
                    ->take(self::LIMIT)
                    ->get(array(
                        'products.id',
                        'products.name',
                        DB::raw('CONCAT(images.image, "") as image'),
                        'DonGia'
                        ));
//        return image::select('id', 'image', 'product_id')->orderBy('id')->limit(self::LIMIT)->get();
//        return DB::select('SELECT p.id, p.name, i.image
//                                FROM products p, images i
//                                WHERE p.id=i.product_id
//                                GROUP BY p.id, p.name, i.image');
    }
    public function getPin(){
//                return product::with('singleImage')->orderBy('id')->limit(self::LIMIT)->get();
        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('producttypes', 'producttypes.id', '=', 'products.productType_id')
            ->join('categories', 'categories.id', '=', 'producttypes.category_id')
            ->where('categories.id', '=', 2)
//                    ->select('name', 'products.id', 'image')
            ->orderBy('id')
//                    ->groupBy('products.id', 'name', 'image')
            ->take(self::LIMIT)
            ->get(array(
                'products.id',
                'products.name',
                'images.image',
                'DonGia'
            ));
//        return image::select('id', 'image', 'product_id')->orderBy('id')->limit(self::LIMIT)->get();
//        return DB::select('SELECT p.id, p.name, i.image
//                                FROM products p, images i
//                                WHERE p.id=i.product_id
//                                GROUP BY p.id, p.name, i.image');
    }

    public function getPhuKien(){
//                return product::with('singleImage')->orderBy('id')->limit(self::LIMIT)->get();
        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('producttypes', 'producttypes.id', '=', 'products.productType_id')
            ->join('categories', 'categories.id', '=', 'producttypes.category_id')
            ->where('categories.id', '=', 3)
//                    ->select('name', 'products.id', 'image')
            ->orderBy('id')
//                    ->groupBy('products.id', 'name', 'image')
            ->take(self::LIMIT)
            ->get(array(
                'products.id',
                'products.name',
                'images.image',
                'DonGia'
            ));
//        return image::select('id', 'image', 'product_id')->orderBy('id')->limit(self::LIMIT)->get();
//        return DB::select('SELECT p.id, p.name, i.image
//                                FROM products p, images i
//                                WHERE p.id=i.product_id
//                                GROUP BY p.id, p.name, i.image');
    }

    public function getProductByCategory($id)
    {
//                return product::with('singleImage')->orderBy('id')->limit(self::LIMIT)->get();
        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('producttypes', 'producttypes.id', '=', 'products.productType_id')
            ->join('categories', 'categories.id', '=', 'producttypes.category_id')
            ->where('categories.id', '=', $id)
//                    ->select('name', 'products.id', 'image')
            ->orderBy('id')
//                    ->groupBy('products.id', 'products.name', 'DonGia')
            ->take(self::LIMIT)
//            ->paginate(0)
            ->get(array(
                'products.id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));
    }
    public function getProductByType($id)
    {
//                return product::with('singleImage')->orderBy('id')->limit(self::LIMIT)->get();
        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('producttypes', 'producttypes.id', '=', 'products.productType_id')
            ->where('producttypes.id', '=', $id)
//                    ->select('name', 'products.id', 'image')
            ->orderBy('id')
//                    ->groupBy('products.id', 'products.name', 'DonGia')
            ->take(self::LIMIT)
            ->get(array(
                'products.id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));
    }

    public function getImageProduct($id){
        return image::where('product_id', $id)->first();
    }
}
