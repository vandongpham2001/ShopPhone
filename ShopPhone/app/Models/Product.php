<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'category_id',
        'NhaSX',
        'ThoiGianBaoHanh',
        'description',
//        'content',
        'status'
        ];
    public function producttype(){
        return $this->hasOne(producttype::class, 'id', 'productType_id');
    }
    public function category(){
        return $this->hasOne(category::class, 'id', 'category_id');
    }
    public function productdetails(){
        return $this->hasMany(productdetail::class, 'product_id', 'id');
    }
    public function images(){
        return $this->hasMany(image::class, 'product_id', 'id');
    }

    public function singleImage(){
        return $this->hasMany(image::class, 'product_id', 'id')->select('image')->limit(1);
    }
}
