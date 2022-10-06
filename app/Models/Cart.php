<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    
    protected $guards = [];

    public function user() { return $this->belongsTo(\App\Models\User::class,'user_id'); }

    public function products() { return $this->belongsToMany(\App\Models\Product::class,'product_id'); }
}
