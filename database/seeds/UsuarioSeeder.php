<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'id' => 200,
            'name' => 'Vinícius dos Santos Petini',
            'email' => 'petiniprojetos96@gmail.com',
            'password' => Hash::make('123456789')
        ]);

        DB::table('users')->insert([
            'id' => 201,
            'name' => 'Ezidio Nepomuceno',
            'email' => 'ezidio@gmail.com',
            'password' => Hash::make('123456789')
        ]);

        DB::table('users')->insert([
            'id' => 203,
            'name' => 'Adm',
            'email' => 'adm@gmail.com',
            'password' => Hash::make('123456789')
        ]);

        DB::table('users')->insert([
            'id' => 204,
            'name' => 'Matheus Henrique P. Santos',
            'email' => 'matheus@gmail.com',
            'password' => Hash::make('123456789')
        ]);

        DB::table('users')->insert([
            'id' => 205,
            'name' => 'Matheus Fernandes',
            'email' => 'fenix@gmail.com',
            'password' => Hash::make('123456789')
        ]);
    }
}
