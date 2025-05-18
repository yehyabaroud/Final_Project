<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'total_price', 'status'];

    // علاقة الـ1:N مع OrderItem
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
