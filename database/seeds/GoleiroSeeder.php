<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GoleiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('goleiros')->insert([
            'telefone' => '(67)99339-4855',
            'img' => asset('/Reinar/public/storage/goleiros/fenix.jpg'),
            'altura' => 1.25,
            'peso' => 25.7,
            'idade' => 25,


            'posicao' => 'goleiro',

            'user_id' => 205
        ]);
    }
}
