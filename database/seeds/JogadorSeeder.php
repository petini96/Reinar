<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JogadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        DB::table('jogadores')->insert([
            'telefone' => '(67)98408-7417',
            'img' => asset('/Reinar/public/storage/jogadores/vinicius.jpg'),
            'altura' => 1.83,
            'peso' => 80.2,
            'idade' => 24,

            'posicao' => 'linha',

            'user_id' => 200
        ]);
        DB::table('jogadores')->insert([
            'telefone' => '(67)99984-7417',
            'img' => asset('/Reinar/public/storage/jogadores/ezidio.jpg'),
            'altura' => 1.72,
            'peso' => 88.2,
            'idade' => 17,

            'resistencia' => (int)45 / 100,
            'drible' => (int)70 / 100,
            'chute' => (int)58 / 100,
            'marcacao' => (int)50 / 100,
            'padrao_de_jogo' =>(int) 48 / 100,
            'habilidade' => (int)60 / 100,

            'pontos' => (int)(45 / 100) + (70 / 100) + (58 / 100) + (48 / 100) + (50 / 100) + (60 / 100),
            'posicao' => 'linha',

            'user_id' => 201
        ]);
        DB::table('jogadores')->insert([
            'telefone' => '(67)99999-4855',
            'img' => asset('/Reinar/public/storage/jogadores/xuxu.png'),
            'altura' => 1.40,
            'peso' => 47.1,
            'idade' => 9,

            'resistencia'=>(int)45/100,
            'drible'=> (int)83/100,
            'chute'=> (int)70/100,
            'marcacao'=> (int)70/100,
            'padrao_de_jogo'=> (int)50/100,
            'habilidade'=>(int) 70/100,

            'pontos' => (int)(45/100) + (83/100) + (70/100)+(70/100)+ (50/100)+ (70/100),
            'posicao' => 'linha',

            'user_id' => 204
        ]);
    }
}
