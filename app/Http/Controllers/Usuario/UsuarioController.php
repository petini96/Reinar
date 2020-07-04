<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function showPerfil(Request $request){

        $usuarios = \App\User::where('name','LIKE',$request->input('perfilNome').'%')->get();
        return view('Jogador.Home.showPerfil', compact('usuarios'));
    }
    public function showProfileFunctions($id)
    {

        $user = \App\User::find($id);

        return view('Jogador.Home.showProfileFunctions', compact('user'));
    }
}
