<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guards = [];

    public function user() { return $this->belongsTo(\App\Models\User::class,'user_id'); }

    public function order() { return $this->belongsTo(\App\Models\Order::class,'order_id'); }
}
