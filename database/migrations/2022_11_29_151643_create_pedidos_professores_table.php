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
        Schema::create('pedidos_professores', function (Blueprint $table) {
            $table->id();
            $table->string("primeiro", 150);
            $table->string("apelido", 150);
            $table->string('telefone', 9);
            $table->string("cv");
            $table->string("email");
            $table->date('data_nac')->nullable();
            $table->enum('modalidade', ['Ballet', 'Hip-Hop', 'Folclore', 'Dança Espanhola', 'Dança Oriental', 'Indiferente']);
            $table->enum("estado_do_pedido", ['aceite', 'recusado', 'pendente'])->default('pendente');
            $table->text('resposta')->nullable();
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
        Schema::dropIfExists('pedidos_professores');
    }
};
