<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    protected $guards = [];

    public function products() { return $this->hasMany(\App\Models\Product::class,'category_id'); }
}
