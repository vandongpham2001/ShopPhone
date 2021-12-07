<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateFormRequest;
use App\Http\Services\Category\CategoryService;
use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    //
    public function create()
    {
        return view('admin.category.add', [
            'title' => 'Thêm danh mục mới',
            'categories' => $this->categoryService->getParent()
        ]);
    }

    public function store(CreateFormRequest $request)
    {
//        dd($request->input());
        $this->categoryService->create($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.category.list', [
            'title' => 'Danh sách danh mục',
            'categories' => $this->categoryService->getAll()

        ]);
    }

    public function show(Category $category){
        return view('admin.category.edit', [
            'title' => 'Chỉnh sửa danh mục: ' . $category->name,
            'category' => $category,
            'categories' => $this->categoryService->getParent()
        ]);
    }

    public function update(Category $category, CreateFormRequest $request){
        $this->categoryService->update($request, $category);
        return redirect('/admin/category/list');
    }

    public function destroy(Request $request): JsonResponse
    {
        $result = $this->categoryService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công danh mục'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
