<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class periodo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'data_inicio',
        'data_fim',
        'ano'
    ];

    public function funcionario() { return $this->belongsTo(\App\Models\User::class,'user_id');}
}
