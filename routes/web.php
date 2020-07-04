<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group([
    'prefix' => 'jogador',
    'middleware' => 'verificaJogador'
], function(){
    Route::get('/', 'Jogador\JogadorController@index')->name('Jogador.Home.index');
});
Route::get('perfil/{nome?}', 'Jogador\JogadorController@buscaPerfil');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/perfilBusca/{perfil_id?}', 'Usuario\UsuarioController@showProfileFunctions')->name('Usuario.Home.showProfileFunctions');
Route::post('/usuarios', 'Usuario\UsuarioController@showPerfil')->name('Usuario.Home.showPerfil');

Route::get('/inautorizado',function(){
    return view('Notificacoes.naoAutorizado');
})->name('Notificacoes.naoAutorizado');
Auth::routes();





