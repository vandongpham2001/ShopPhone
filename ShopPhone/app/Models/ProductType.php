<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    public function Category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function Products(){
        return $this->hasMany(Product::class, 'productType_id', 'id');
    }
}
