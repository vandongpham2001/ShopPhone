<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    public function Product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    public function OrdersDetails(){
        return $this->hasMany(OrdersDetail::class, 'productDetail_id', 'id');
    }
}
