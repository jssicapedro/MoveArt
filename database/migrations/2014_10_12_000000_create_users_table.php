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
            $table->string('foto');
            $table->string('primeiro', 30);
            $table->string('apelido', 30);
            $table->string('telefone', 9);
            $table->string('email', 30)->unique;
            $table->date('data_nasc');
            $table->string('cc', 9)->unique;
            $table->string('nif', 9);
            $table->enum('genero', ['feminino', 'masculino', 'outro', 'nao divulgar']);
            $table->enum('perfil', ['aluno', 'admin', 'professor'])->default('aluno');
            $table->string('localidade', 30);
            $table->string('rua', 30);
            $table->string('cod_postal', 8);
            $table->string('modalidade');
            $table->enum('type_insc', ['anual', 'mensal']);
            $table->enum('metod_pag', ['paypal', 'visa', 'multibanco', 'MBway']);
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
