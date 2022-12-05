<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'email', 'mobile', 'quantity', 'total', 
    ];

    public function users() {
        $relation = hasOne('App\Models\User', 'user_id');
        return $this->$relation;
    }

    public function products() {
        $relation = belongsToMany('App\Models\Product', 'order_products', 'order_id', 'product_id');
        return $this->$relation;
    }
}
