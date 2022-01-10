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
                    ->join('categories', 'categories.id', '=', 'products.category_id')
                    ->where('categories.parent_id', '=', 1)
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
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.parent_id', '=', 2)
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
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.parent_id', '=', 3)
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
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('products.category_id', '=', $id)
//                    ->select('name', 'products.id', 'image')
            ->orderBy('id')
//                    ->groupBy('products.id', 'products.name', 'DonGia')
            ->take(self::LIMIT*2)
//            ->paginate(0)
            ->get(array(
                'products.id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));
    }

    public function getProductByCategoryParentId($id)
    {
//                return product::with('singleImage')->orderBy('id')->limit(self::LIMIT)->get();
        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.parent_id', '=', $id)
//                    ->select('name', 'products.id', 'image')
            ->orderBy('id')
//                    ->groupBy('products.id', 'products.name', 'DonGia')
            ->take(self::LIMIT*2)
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
//            ->paginate(1)
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
    public function show($id){
        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('products.id', $id)
            ->where('products.status', 1)
//            ->firtOrFail();
            ->get(array(
            'products.id',
            'products.name',
             DB::raw('CONCAT(images.image, "") as image'),
            'DonGia',
                'ROM',
                'RAM',
                'CPU',
                'ManHinh',
                'Pin',
                'Camera',
                'Color',
                'category_id'))
            ->first();
    }
    public function more($id){

    }
}
