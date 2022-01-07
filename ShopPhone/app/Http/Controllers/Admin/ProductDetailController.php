<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductDetail\ProductDetailRequest;
use App\Http\Services\Details\ProductDetailsService;
use App\Http\Services\ProductDetail\ProductDetailService;
use App\Models\product;
use App\Models\productdetail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductdetailController extends Controller
{
    protected $productdetailService;

    public function __construct(ProductDetailService $productService)
    {
        $this->productdetailService=$productService;
    }

    public function index()
    {
        return view('admin.productdetail.list', [
            'title' => 'Danh sách chi tiết sản phẩm',
            'productdetail'=>$this->productdetailService->getAll()
        ]);
        
    }
    public function create()
    {
        return view('admin.productdetail.add', [
            'title' => 'Thêm Chi tiết sản phẩm mới',
            'products' => $this->productdetailService->getAllProduct()
        ]);
    }
    public function store(ProductDetailRequest $request)
    {
        $this->productdetailService->create($request);
        return redirect('admin/productdetails/list');
    }
    public function show(productdetail $productdetail)
    {
        return view('admin.productdetail.edit', [
            'title' => 'Chỉnh sửa chi tiết sản phẩm: ',
            'productdetail' => $productdetail,
            'products' => $this->productdetailService->getAllProduct()
        ]);
    }
    public function update(productdetail $productdetail, ProductDetailRequest $request)
    {
        $result = $this->imageService->update($request, $productdetail);
        if ($result) {
            return redirect('/admin/productdetail/list');
        }
        return redirect()->back();
    }
}