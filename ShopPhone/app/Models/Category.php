<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function ProductTypes(){
        return $this->hasMany(ProductType::class, 'category_id', 'id');
    }

    protected $fillable=[
        'name',
        'description',
        'slug',
        'status',
        'parent_id'
    ];
}
