<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'image',
        'price',
        'quantity',
    ];

    public function users() {
        $relation = hasOne('App\Models\User', 'user_id');
        return $this->$relation;
    }

    public function orders() {
        $relation = hasMany('App\Model\Product');
        return $this->$relation;
    }
}
