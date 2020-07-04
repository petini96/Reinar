<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('telefone');
            $table->double('altura');
            $table->double('peso');
            $table->integer('idade');
            $table->string('img');

            $table->double('resistencia')->nullable();
            $table->double('drible')->nullable();
            $table->double('chute')->nullable();
            $table->double('marcacao')->nullable();
            $table->double('padrao_de_jogo')->nullable();
            $table->double('habilidade')->nullable();

            $table->double('pontos')->nullable();

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('posicao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogadores');
    }
}
