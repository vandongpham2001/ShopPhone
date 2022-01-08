<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;
use App\Http\Services\Product\ProductClientService;

class MenuController extends Controller
{
    protected $menuService;
    protected $productService;

    public function __construct(CategoryService $menuService, ProductClientService $productService)
    {
        $this->menuService=$menuService;
        $this->productService=$productService;
    }

    public function index(Request $request, $id, $slug=''){
        $menu=$this->menuService->getId($id);
        $products=$this->productService->getProductByCategory($id);
        return view('menu', [
            'title'=>$menu->name,
            'products'=>$products,
            'menu'=>$menu
        ]);
    }
}
