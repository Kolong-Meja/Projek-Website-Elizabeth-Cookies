<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'order_id', 'product_id',
        'product_name', 'product_image', 'total_product_quantity',
        'sub_total'
    ];

    public function users() {
        return $this->hasOne('App\Models\User', 'user_id');
    }

    public function orders() {
        return $this->hasOne();
    }
}
