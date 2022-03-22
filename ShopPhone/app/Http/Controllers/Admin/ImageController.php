<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Image\ImageRequest;
use App\Http\Services\Image\ImageService;
use App\Models\image;
use App\Models\product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        return view('admin.image.list', [
            'title' => 'Danh sách ảnh sản phẩm',
//            'images' => $this->imageService->getAll()
            'products' => $this->imageService->getAllProduct()
        ]);
    }

    public function create()
    {
        return view('admin.image.add', [
            'title' => 'Thêm ảnh mới',
            'products' => $this->imageService->getAllProduct()
        ]);
    }

    public function store(ImageRequest $request)
    {
        $this->imageService->create($request);
        return redirect('admin/image/list');
    }

    public function show(image $image)
    {
        return view('admin.image.edit', [
            'title' => 'Chỉnh sửa ảnh sản phẩm: ' . $image->product->name,
            'image' => $image,
            'products' => $this->imageService->getAllProduct()
        ]);
    }

    public function update(image $image, ImageRequest $request)
    {
        $result = $this->imageService->update($request, $image);
        if ($result) {
            return redirect('/admin/image/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $result = $this->imageService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công ảnh sản phẩm'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }

    public function search(Request $request): JsonResponse
    {
        $result = $this->imageService->search($request);
        return response()->json([
            'list' => $result,
            'message' => $result != null ? "" : "Không tìm thấy ảnh nào!",
            'keyword' => $request->input('keyword') . gettype($result)
        ]);
    }

    public function view(product $product)
    {

        return view('admin.image.view',[
            'title' => 'Danh sách ảnh sản phẩm: ' . $product->name,
            'product' => $product,
            'images'=>$product->images()->get()
        ]);
    }
}
