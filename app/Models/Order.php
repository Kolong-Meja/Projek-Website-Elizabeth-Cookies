<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'product_id', 'user_name', 
        'user_email', 'user_mobile','product_name', 
        'price', 'quantity', 'sub_total'
    ];

    public function users() {
        $relation = hasOne('App\Models\User', 'user_id');
        return $this->$relation;
    }

    public function products() {
        $relation = hasOne('App\Models\Product', 'product_id');
        return $this->$relation;
    }
}
