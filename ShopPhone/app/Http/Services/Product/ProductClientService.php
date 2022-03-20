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
                    ->orderByDesc('products.id')
                    ->groupBy('products.id')
                    ->take(self::LIMIT)
                    ->get(array(
                        'productdetails.id',
                        'productdetails.product_id',
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
            ->where('categories.id', '=', 3)
//                    ->select('name', 'products.id', 'image')
            ->orderByDesc('products.id')
            ->groupBy('products.id')
            ->take(self::LIMIT)
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
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
//        return DB::table('products')
//            ->join('images', 'images.product_id', '=', 'products.id')
//            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
//            ->join('categories', 'categories.id', '=', 'products.category_id')
//            ->where('categories.parent_id', '=', 2)
//            ->orderBy('id')
//            ->take(self::LIMIT)
//            ->get(array(
//                'productdetails.id',
//                'productdetails.product_id',
//                'products.name',
//                'images.image',
//                'DonGia'
//            ));


        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.parent_id', '=', 2)
            ->orderByDesc('products.id')
            ->groupBy('products.id')
            ->take(self::LIMIT)
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
                'products.name',
                'images.image',
                'DonGia'
            ));
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
            ->orderByDesc('products.id')
            ->groupBy('products.id')
            ->take(self::LIMIT*2)
//            ->paginate(0)
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
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
            ->orderByDesc('products.id')
            ->groupBy('products.id')
            ->take(self::LIMIT*2)
//            ->paginate(0)
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
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
            ->groupBy('products.id')
            ->take(self::LIMIT)
//            ->paginate(1)
            ->get(array(
                'products.id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));
    }

    public function getListImageProduct($id){
//        return image::where('product_id', $id);
        return DB::table('images')
            ->join('products', 'images.product_id', '=', 'products.id')
            ->where('images.product_id', $id)
//            ->where('products.status', 1)
//            ->with('category')
//            ->firtOrFail();
            ->get(array(
                'images.id',
                'images.image',
                'products.name',
            ));

    }


    public function show($id){
        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('products.id', $id)
            ->where('products.status', 1)
//            ->with('category')
//            ->firtOrFail();
            ->get(array(
            'productdetails.product_id',
            'products.name',
             DB::raw('CONCAT(images.image, "") as image'),
            'productdetails.id',
            'DonGia',
                'ROM',
                'RAM',
                'CPU',
                'ManHinh',
                'Pin',
                'Camera',
                'Color',
                'SoLuong',
                'products.description',
                'category_id'
                ))
            ->first();
    }

    public function more($id){
        $product= product::where('id', $id)->pluck('category_id');
        return DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('products.status', '=', 1)
            ->where('products.id', '!=', $id)
            ->where('products.category_id', '=', $product[0])
//            ->where('categories.parent_id', '=', $id)
//                    ->select('name', 'products.id', 'image')
            ->orderByDesc('id')
            ->groupBy('products.id')
            ->limit(4)
//            ->paginate(0)
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));
    }

    public function getTopProduct(){
        return DB::table('products')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->join('ordersdetails', 'ordersdetails.product_id', '=', 'productdetails.id')
            ->sum('ordersdetails.soLuong')
            ->groupBy('productdetails.id')
            ->take(3)
            ->get(array(
                'productdetails.id'
            ));
    }

    public function search($request)
    {
        $keyword = (string)$request->input('keyword');
        $rs = DB::table('products')
            ->join('images', 'images.product_id', '=', 'products.id')
            ->join('productdetails', 'productdetails.product_id', '=', 'products.id')
            ->where('products.name', 'like', "%" . $keyword . "%")
//                    ->select('name', 'products.id', 'image')
            ->orderByDesc('products.id')
            ->groupBy('products.id')
            ->take(self::LIMIT*2)
//            ->paginate(0)
            ->get(array(
                'productdetails.id',
                'productdetails.product_id',
                'products.name',
                DB::raw('CONCAT(images.image, "") as image'),
                'DonGia'
            ));

        return count($rs) == 0 ? null : $rs;
    }
}
