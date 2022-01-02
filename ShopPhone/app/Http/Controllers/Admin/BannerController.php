<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\BannerRequest;
use App\Http\Services\Banner\BannerService;
use App\Models\banner;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $bannerService;

    public function __construct(BannerService $bannerService)
    {
        $this->bannerService=$bannerService;
    }

    public function index()
    {
        return view('admin.banner.list', [
            'title' => 'Danh sách banner',
            'banners' => $this->bannerService->getAll()
        ]);
    }

    public function create()
    {
        return view('admin.banner.add', [
            'title' => 'Thêm banner mới'
        ]);
    }


    public function store(BannerRequest $request)
    {
        $this->bannerService->create($request);
        return redirect()->back();
    }

    public function show(banner $banner)
    {
        return view('admin.banner.edit', [
            'title' => 'Chỉnh sửa banner: ' . $banner->noiDung,
            'banner' => $banner
        ]);
    }

    public function update(banner $banner, BannerRequest $request)
    {
        $result=$this->bannerService->update($request, $banner);
        if ($result) {
            return redirect('/admin/banner/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $result = $this->bannerService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công banner'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }

    public function search(Request $request): JsonResponse
    {
        $result = $this->bannerService->search($request);
        return response()->json([
            'list' => $result,
            'message' => $result != null  ? "" : "Không tìm thấy banner nào!",
            'keyword' => $request->input('keyword').gettype($result)
        ]);
    }
}
