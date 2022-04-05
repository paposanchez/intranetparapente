<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Eventos extends Migration
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
            $table->date('fechaevento');
            $table->unsignedBigInteger('cliente')->unique();
            $table->foreign('cliente')->references('id')->on('table_clientes');
            $table->string('responsable_cliente');
            $table->string('contact_cliente');
            $table->string('lugar');
            $table->longText('requerimientos');
            $table->unsignedBigInteger('estado')->unique();
            $table->foreign('estado')->references('id')->on('evestado');
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
}
