<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoleirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goleiros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('telefone');
            $table->double('altura');
            $table->double('peso');
            $table->integer('idade');
            $table->string('img');

             $table->double('bola_canto')->nullable();
             $table->double('bola_alta')->nullable();
             $table->double('bola_baixa')->nullable();
             $table->double('bola_meio')->nullable();
             $table->double('ponte')->nullable();
             $table->double('chute')->nullable();

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
        Schema::dropIfExists('goleiros');
    }
}
