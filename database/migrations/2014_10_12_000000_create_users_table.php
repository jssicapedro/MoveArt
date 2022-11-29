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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('primeiro', 30);
            $table->string('apelido', 30);
            $table->string('telefone', 9)->nullable();
            $table->string('email', 30)->unique();
            $table->date('data_nasc');
            $table->string('cc', 9)->unique()->nullable();
            $table->string('nif', 9)->nullable();
            $table->enum('genero', ['feminino', 'masculino', 'outro', 'nao divulgar']);
            $table->enum('perfil', ['aluno', 'admin', 'professor'])->default('aluno');
            $table->string('localidade', 30)->nullable();
            $table->string('rua', 30)->nullable();
            $table->string('cod_postal', 8)->nullable();
            $table->integer('modalidade_id')->foreign('modalidade_id')->references('id')->on('modalidades');
            $table->integer('inscricao_id')->foreign('inscricao_id')->references('id')->on('inscricoes');
            $table->integer('evento_id')->foreign('evento_id')->references('id')->on('eventos');
            $table->string('pass');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
