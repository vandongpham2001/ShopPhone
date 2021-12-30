<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function User(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function OrdersDetails(){
        return $this->hasMany(OrdersDetail::class, 'order_id', 'id');
    }
    public function Invoice(){
        return $this->hasOne(Invoice::class, 'id', 'invoice_id');
    }
}
