<?php

namespace App\Http\Controllers;

use App\Http\Services\Category\CategoryService;
use App\Http\Services\Product\ProductClientService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected $menuService;
    protected $productService;

    public function __construct(CategoryService $menuService, ProductClientService $productService)
    {
        $this->menuService = $menuService;
        $this->productService = $productService;
    }

    public function index(Request $request, $id, $slug = '')
    {
        $menu = $this->menuService->getId($id);
        if ($id >= 3) {
            $products = $this->productService->getProductByCategory($id);
        }
        else{
            $products = $this->productService->getProductByCategoryParentId($id);
        }
        return view('menu', [
            'title' => $menu->name,
            'products' => $products,
            'menu' => $menu
        ]);
    }
}
