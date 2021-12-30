<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordersdetail extends Model
{
    use HasFactory;
    public function productdetail(){
        return $this->hasOne(productdetail::class, 'id', 'productDetail_id');
    }
    public function order(){
        return $this->hasOne(order::class, 'id', 'order_id');
    }
}
