<?php
 
 namespace App\Http\Repositories;

use App\Models\User;

 class FuncionariosRepositorie {
    public static function index() {
        return User::where('role','funcionario')->get();
    }
 }