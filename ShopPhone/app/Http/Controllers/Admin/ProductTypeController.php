<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductType\ProductTypeRequest;
use App\Http\Services\ProductType\ProductTypeService;
use App\Models\producttype;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    protected $productTypeService;

    public function __construct(ProductTypeService $productTypeService)
    {
        $this->productTypeService=$productTypeService;
    }

    public function index()
    {
        return view('admin.productType.list', [
            'title' => 'Danh sách loại sản phẩm',
            'productTypes' => $this->productTypeService->getAll()
        ]);
    }

    public function create()
    {
        return view('admin.productType.add', [
            'title' => 'Thêm loại sản phẩm mới',
            'categories'=>$this->productTypeService->getAllCategory()
        ]);
    }


    public function store(ProductTypeRequest $request)
    {
        $this->productTypeService->create($request);
        return redirect()->back();
    }

    public function show(producttype $productType)
    {
        return view('admin.productType.edit', [
            'title' => 'Chỉnh sửa loại sản phẩm: ' . $productType->name,
            'productType' => $productType,
            'categories' => $this->productTypeService->getAllCategory()
        ]);
    }


    public function update(producttype $productType, ProductTypeRequest $request)
    {
        $result=$this->productTypeService->update($request, $productType);
        if ($result) {
            return redirect('/admin/producttype/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $result = $this->productTypeService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công loại sản phẩm'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }

    public function search(Request $request): JsonResponse
    {
        $result = $this->productTypeService->search($request);
        return response()->json([
            'list' => $result,
            'message' => $result != null  ? "" : "Không tìm thấy loại sản phẩm nào!",
            'keyword' => $request->input('keyword').gettype($result)
        ]);
    }
}
