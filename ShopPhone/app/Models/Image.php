<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'image'
    ];
    public function product(){
        return $this->hasOne(product::class, 'id', 'product_id');
//        return $this->belongsTo(product::class, 'id', 'product_id');
    }
}
