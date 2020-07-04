<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goleiro extends Model
{
    protected $fillable = [
        'id',
        'telefone',
        'altura',
        'peso',
        'idade',
        'img',

        'bola_canto',
        'bola_alta',
        'bola_baixa',
        'bola_meio',
        'ponte',
        'chute',

        'posicao',
        'pontos',

        'user_id'
    ];
    protected $table = "goleiros";
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
