<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'telefone'
    ];


    public function funcionario() { return $this->belongsTo(\App\Models\User::class,'user_id');}
}
