<?php
 
 namespace App\Http\Repositories;

use App\Models\contato;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

 class ContatosRepositorie {
    public static function index() {

        return [
            'contatos' => Contato::all(),
            'funcionarios' => User::where('role_id',2)->get()
        ];
    }

    public static function store($request) {

        contato::create([
            'user_id' => $request->funcionario,
            'telefone' => $request->telefone,
        ]);

        return redirect()->route('contatos.index');
    }

    public static function update($id,$request) {

        Contato::where('id',$id)->update([
            'user_id' => $request->funcionario,
            'telefone' => $request->matricula,
        ]);

        return redirect()->route('contatos.index');
    }

    public static function destroy($id) {

         Contato::where('id',$id)->delete();
         return redirect()->route('contatos.index');
    }
 }