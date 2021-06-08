<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->time('hora');
            $table->date('fechanac')->nullable();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('youtube')->nullable();
            $table->unsignedBigInteger('establecimiento');
            $table->foreign('establecimiento')->references('id')->on('locations');
            $table->unsignedBigInteger('diacono');
            $table->foreign('diacono')->references('id')->on('diaconos');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('tservicio')->nullable();
            $table->string('nombregestor');
            $table->string('fonogestor');
            $table->string('correogestor');
            $table->boolean('streaming')->nullable();
            $table->string('estado');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicios');
    }
}
