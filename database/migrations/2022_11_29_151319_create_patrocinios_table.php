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
        Schema::create('patrocinios', function (Blueprint $table) {
            $table->id();
            $table->string('nome',150);
            $table->string('email',150);
            $table->double('valor');
            $table->string('telefone', 9)->nullable();
            $table->text('mensagem')->nullable();
            $table->enum('estado', ['respondido', 'sem reposta'])->default('sem reposta');
            $table->text('resposta')->nullable();
            $table->softDeletes();/* coluna deleted_at -> softdelete */
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
        Schema::dropIfExists('patrocinio');
    }
};
