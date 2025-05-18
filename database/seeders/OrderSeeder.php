<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;

class OrderSeeder extends Seeder
{
    public function run()
    {
        // لكل مستخدم طلب واحد عشوائي به 1–5 منتجات
        User::all()->each(function ($user) {
            $order = Order::create([
                'user_id'     => $user->id,
                'total_price' => 0,
                'status'      => 'pending',
            ]);

            $total = 0;
            $products = Product::inRandomOrder()->limit(rand(1, 5))->get();
            foreach ($products as $p) {
                $qty = rand(1, 3);
                $order->items()->create([
                    'product_id' => $p->id,
                    'quantity'   => $qty,
                    'price'      => $p->price,
                ]);
                $total += $p->price * $qty;
            }

            $order->update(['total_price' => $total]);
        });
    }
}
