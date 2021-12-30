<?php

namespace App\Http\Services\ProductType;

use App\Models\Category;

class ProductTypeService
{
    public function getCategory(){
        return Category::where('status', 1)->get();
    }
}
