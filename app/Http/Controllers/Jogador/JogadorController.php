<?php

namespace App\Http\Controllers\Jogador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jogador;
use App\Goleiro;
class JogadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Jogador.Home.index');
    }
    public function showProfileFunctions($id){
        $user = \App\User::find($id);
        return view('Jogador.Home.showProfileFunctions', compact('user'));
    }
    public function buscaPerfil($nome){

        $usuarios = \App\User::all();
        $hint = "";

        // lookup all hints from array if $nome is different from ""
        if ($nome !== "") {
            $nome = strtolower($nome);
            $len = strlen($nome);
            foreach ($usuarios as $usuario) {
                if (stristr($nome, substr($usuario['name'], 0, $len))) {

                    if ($hint === "") {
                        $hint = $usuario['name'];
                    } else {
                        $hint .= ", $usuario->name";
                    }
                }
            }
        }

        echo $hint === "" ? "no suggestion" : $hint;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
