<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use App\Models\Product;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'product_id', 'product_name',
        'user_name', 'user_email', 'user_mobile',
        'quantity'
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'user_orders');
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'order_products');
    }
}
