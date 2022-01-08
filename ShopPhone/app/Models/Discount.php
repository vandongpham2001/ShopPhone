<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    public function productdetails(){
        return $this->hasMany(productdetail::class, 'discount_id', 'id');
    }
    protected $fillable=[
        'name',
        'discount',
        'image'
    ];
}
