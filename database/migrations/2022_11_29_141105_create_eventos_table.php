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
            $table->string('nome', 150);
            $table->datetime('data')->format('dd/MM/yyyy hh:mm:ss');
            $table->string('localizacao',150);
            $table->string('foto');
            $table->text('descricao');
            $table->integer('user_id')->foreign('user_id')->references('id')->on('users');
            $table->integer('id_modalidade')->foreign('id_modalidade')->references('id')->on('modalidades');
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
