<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->varchar('nome', 150);
            $table->datetime('data')->format("d-m-Y h:m:s");
            $table->string('localizacao',150);
            $table->string('foto');
            $table->text('descricao');
            $table->integer('id_modalidade')->foreign('id_modalidade')->references('id')->on('modalidades');
            $table->integer('id_utilizador')->foreign('id_utilizador')->references('id')->on('users');
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
        Schema::dropIfExists('eventos');
    }
};
