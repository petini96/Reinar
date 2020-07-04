<?php

namespace App\Http\Middleware;

use Closure;

class verificaJogador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $usuario = auth()->user();
        // $jogador = \App\Jogador::where('user_id', '=', $usuario->id)->get();
        // $goleiro = \App\Goleiro::where('user_id', '=', $usuario->id)->get();
        // if(empty($jogador->toArray()) || empty($jogador->toArray())) {
        //     auth()->logout();
        //     return redirect()->route('Notificacoes.naoAutorizado');
        // }
        return $next($request);
    }
}
