<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Services\Product\ProductService;
use App\Models\product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService=$productService;
    }

    public function index()
    {
        return view('admin.product.list', [
            'title' => 'Danh sách sản phẩm',
            'products' => $this->productService->getAll()
        ]);
    }

    public function create()
    {
        return view('admin.product.add', [
            'title' => 'Thêm sản phẩm mới',
            'categories'=>$this->productService->getAllCategory()
        ]);
    }


    public function store(ProductRequest $request)
    {
        $this->productService->create($request);
        return redirect()->back();
    }

    public function show(product $product)
    {
        return view('admin.product.edit', [
            'title' => 'Chỉnh sửa sản phẩm: ' . $product->name,
            'product' => $product,
            'categories' => $this->productService->getAllCategory()
        ]);
    }


    public function update(product $product, ProductRequest $request)
    {
        $result=$this->productService->update($request, $product);
        if ($result) {
            return redirect('/admin/product/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $result = $this->productService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công sản phẩm'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }

    public function search(Request $request): JsonResponse
    {
        $result = $this->productService->search($request);
        return response()->json([
            'list' => $result,
            'message' => $result != null  ? "" : "Không tìm thấy sản phẩm nào!",
            'keyword' => $request->input('keyword').gettype($result)
        ]);
    }

    public function view(product $product)
    {

        return view('admin.product.detaillist',[
            'title' => 'Danh sách chi tiết sản phẩm: ' . $product->name,
            'product' => $product,
            'productdetails'=>$product->productdetails()->get()
        ]);
    }
}
