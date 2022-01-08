<?php

namespace App\Http\Controllers;

use App\Http\Services\Banner\BannerService;
use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Product\ProductClientService;

class MainController extends Controller
{
    protected $banner;
    protected $category;
    protected $product;
    protected $productDetail;
    protected $image;


    public function __construct(BannerService $banner, CategoryService $category, ProductClientService $product){
        $this->category=$category;
        $this->banner=$banner;
        $this->product=$product;
    }

    public function index()
    {
        return view('main', [
            'title'=>'Shop điện thoại di động',
            'banners'=>$this->banner->show(),
            'categories'=>$this->category->show(),
            'products'=>$this->product->get()
        ]);
    }
}
