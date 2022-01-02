<?php

namespace App\Http\Controllers;

use App\Http\Services\Banner\BannerService;
use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;

class MainController extends Controller
{
    protected $banner;
    protected $category;

    public function __construct(BannerService $banner, CategoryService $category){
        $this->category=$category;
        $this->banner=$banner;
    }

    public function index()
    {
        return view('main', [
            'title'=>'Shop điện thoại di động',
            'banners'=>$this->banner->show(),
            'categories'=>$this->category->show()
        ]);
    }
}
