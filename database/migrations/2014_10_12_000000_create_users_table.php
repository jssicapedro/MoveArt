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
            $table->enum('genero', ['Feminino', 'Masculino', 'Outro', 'Prefiro não divulgar']);
            $table->enum('perfil', ['Aluno', 'Administrador', 'Professor'])->default('Aluno');
            $table->string('localidade', 30)->nullable();
            $table->string('rua', 30)->nullable();
            $table->string('cod_postal', 8)->nullable();
            $table->string('password');
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
