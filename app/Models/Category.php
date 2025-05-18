<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    // علاقة الـM:N مع المنتجات
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_category');
    }
}
