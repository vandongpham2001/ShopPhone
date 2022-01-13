<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductClientService;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductClientService $productService)
    {
        $this->productService=$productService;
    }

    public function index($id='', $slug=''){
        $product=$this->productService->show($id);
        $imageProduct=$this->productService->getListImageProduct($id);
//        dd($imageProduct);
        $productsMore=$this->productService->more($id);
//        dd($product);
        return view('products.content', [
            'title'=>$product->name,
            'product'=>$product,
            'images'=>$imageProduct,
            'products'=>$productsMore
        ]);
    }
}
