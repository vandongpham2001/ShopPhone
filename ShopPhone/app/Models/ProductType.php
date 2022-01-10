<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producttype extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'image',
        'category_id',
        'status'
    ];
//    public function category(){
//        return $this->hasOne(category::class, 'id', 'category_id');
//    }
//    public function products(){
//        return $this->hasMany(product::class, 'productType_id', 'id');
//    }
}
