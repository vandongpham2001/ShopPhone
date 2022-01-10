<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
//    public function productpypes(){
//        return $this->hasMany(producttype::class, 'category_id', 'id');
//    }
    public function products(){
        return $this->hasMany(product::class, 'category_id', 'id');
    }

    protected $fillable=[
        'name',
        'description',
        'image',
        'slug',
        'status',
        'parent_id'
    ];
}
