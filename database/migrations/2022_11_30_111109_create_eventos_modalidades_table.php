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
        Schema::create('eventos_modalidades', function (Blueprint $table) {
            $table->bigInteger('eventos_id')->unsigned();
            $table->foreign('eventos_id')->references('id')->on('eventos');
            $table->bigInteger('modalidades_id')->unsigned();
            $table->foreign('modalidades_id')->references('id')->on('modalidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos_modalidades');
    }
};
