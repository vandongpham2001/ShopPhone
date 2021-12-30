<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function ProductType(){
        return $this->hasOne(ProductType::class, 'id', 'productType_id');
    }
    public function ProductDetails(){
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }
    public function Images(){
        return $this->hasMany(Image::class, 'product_id', 'id');
    }
}
