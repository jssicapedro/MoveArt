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
        Schema::create('modalidades', function (Blueprint $table) {
            $table->id();
            $table->string('modalidade');
            $table->text('descricao');
            $table->string('foto_desc')->nullable();
            $table->text('valor_mensal');
            $table->string('foto_mensal')->nullable();
            $table->text('valor_anual');
            $table->string('foto_anual')->nullable();
            $table->string('foto_horario')->nullable();
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
        Schema::dropIfExists('modalidades');
    }
};
