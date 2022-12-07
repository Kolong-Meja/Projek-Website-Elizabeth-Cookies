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
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
