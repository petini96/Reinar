<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{

    protected $fillable = [
        'id',
        'telefone',
        'altura',
        'peso',
        'idade',
        'img',

        'resistencia',
        'drible',
        'chute',
        'marcacao',
        'padrao_de_jogo',
        'habilidade',

        'posicao',
        'pontos',

        'user_id'
    ];
    protected $table = "jogadores";
    public function user(){
        return $this->belongsTo(\App\User::class);
    }
}
