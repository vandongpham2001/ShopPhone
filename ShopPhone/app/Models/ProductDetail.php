<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productdetail extends Model
{
    use HasFactory;
    public function product(){
        return $this->hasOne(product::class, 'id', 'product_id');
    }
    public function ordersdetails(){
        return $this->hasMany(ordersdetail::class, 'productDetail_id', 'id');
    }
}
