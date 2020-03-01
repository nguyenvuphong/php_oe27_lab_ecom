<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name', 
        'quantity', 
        'price', 
        'price_sale', 
        'description', 
        'brand', 
        'thumbnail', 
        'category_id', 
        'CPU', 
        'RAM', 
        'color', 
    ];

    public function images(){
        return $this->hasMany(Image::class, 'product_id', 'id');
    }

    public function category(){
        return $this->belongTo(Category::class, 'category_id', 'id');
    }
}
