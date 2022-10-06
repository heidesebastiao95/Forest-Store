<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guards = [];

    public function category() { return $this->belongsTo(\App\Models\ProductCategory::class); }

    public function orders() { return $this->hasMany(\App\Models\Order::class); }

    public function carts() { return $this->hasMany(\App\Models\Cart::class); }

    public function wasMarked() { return $this->hasMany(\App\Models\ProductReacting::class); }
}
