<?php
 
 namespace App\Http\Repositories;

use App\Models\contato;
use App\Models\periodo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

 class FeriasRepositorie {
    public static function index() {

        return [
            'ferias' => periodo::all(),
            'funcionarios' => User::where('role_id',2)->get()
        ];
    }

    public static function store($request) {

        periodo::create([
            'user_id' => $request->funcionario,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim,
            'ano' => now()
        ]);

        return redirect()->route('ferias.index');
    }

    public static function update($id,$request) {

        periodo::where('id',$id)->update([
            'user_id' => $request->funcionario,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim,
            'ano' => now()
        ]);

        return redirect()->route('ferias.index');
    }

    public static function destroy($id) {

        periodo::where('id',$id)->delete();
         return redirect()->route('ferias.index');
    }
 }