<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total', 'name', 'email', 'phone'
    ];

    public function users() {
        $relation = hasOne('App\Models\User', 'user_id');
        return $this->$relation;
    }
}
