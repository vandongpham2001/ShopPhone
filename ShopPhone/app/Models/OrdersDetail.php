<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersDetail extends Model
{
    use HasFactory;
    public function ProductDetail(){
        return $this->hasOne(ProductDetail::class, 'id', 'productDetail_id');
    }
    public function Order(){
        return $this->hasOne(Order::class, 'id', 'order_id');
    }
}
