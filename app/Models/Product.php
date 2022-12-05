<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use App\Models\Order;

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
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
