<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create()
    {
        return view('admin.image.add', [
            'title' => 'Thêm ảnh mới'
        ]);
    }
}
