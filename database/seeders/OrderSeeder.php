<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Order::create(
        [
            'user_id' => 2,
            'product_id' => 1,
            'user_name' => 'John Smith',
            'user_email' => 'johnsmith78@gmail.com',
            'user_mobile' => '08587766554',
            'product_name' => 'Lidah Kucing Original',
            'quantity' => 10,
        ]
    );
    }
}
