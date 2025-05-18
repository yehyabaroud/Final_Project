<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'quantity', 'image'];

    // علاقة الـM:N مع التصنيفات
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }
}
