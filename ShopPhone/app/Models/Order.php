<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable=[
        'address',
        'sdt',
        'status',
        'user_id'
    ];
    public function user(){
        return $this->hasOne(user::class, 'id', 'user_id');
    }
    public function ordersdetails(){
        return $this->hasMany(ordersdetail::class, 'order_id', 'id');
    }
    public function invoice(){
        return $this->hasOne(invoice::class, 'id', 'invoice_id');
    }
}
