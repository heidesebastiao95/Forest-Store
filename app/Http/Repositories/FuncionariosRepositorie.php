<?php
 
 namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

 class FuncionariosRepositorie {
    public static function index() {
        return User::where('role_id',2)->get();
    }

    public static function store($request) {
        User::create([
            'nome' => $request->nome,
            'matricula' => $request->matricula,
            'cpf' => $request->cpf,
            'salario' => $request->salario,
            'cargo' => $request->cargo,
            'email' => $request->email,
            'role_id' => 2,
            'password' => Hash::make('qwertyuiop[]')
        ]);

        return redirect()->route('funcionarios.index');
    }

    public static function update($id,$request) {
        User::where('id',$id)->update([
            'nome' => $request->nome,
            'matricula' => $request->matricula,
            'cpf' => $request->cpf,
            'salario' => $request->salario,
            'cargo' => $request->cargo,
            'email' => $request->email,
           // 'password' => Hash::make($request->password)
        ]);

        return redirect()->route('funcionarios.index');
    }

    public static function destroy($id) {

         User::where('id',$id)->delete();
         return redirect()->route('funcionarios.index');
    }
 }