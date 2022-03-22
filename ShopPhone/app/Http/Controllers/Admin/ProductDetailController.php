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

class ProductDetailController extends Controller
{
    protected $productdetailService;

    public function __construct(ProductDetailService $productService)
    {
        $this->productdetailService=$productService;
    }

    public function index(product $product)
    {
        return view('admin.product.detaillist', [
            'title' => 'Danh sách chi tiết sản phẩm',
            'product' => $product,
//            'productdetails'=>$this->productdetailService->getProductDetail(),
            'productdetails'=>$product->productdetails()->get()
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
    public function show(productdetail $image)
    {
        return view('admin.productdetail.edit', [
            'title' => 'Chỉnh sửa chi tiết sản phẩm: ' . $image->product->name,
            'productdetails' => $image,
            'products' => $this->productdetailService->getAllProduct()
        ]);
    }

    public function update(productdetail $image, ProductDetailRequest $request)
    {
        $result = $this->productdetailService->update($request, $image);
        if ($result) {
            return redirect('/admin/productdetails/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $result = $this->productdetailService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công chi tiết sản phẩm'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
