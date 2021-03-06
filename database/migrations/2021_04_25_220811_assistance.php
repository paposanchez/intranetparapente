<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Assistance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistence', function (Blueprint $table) {
            $table->id();
            $table->datetime('hora');
            $table->string('sector');
            $table->string('ubicacion');
            $table->string('link');
            $table->string('difunto');
            $table->string('deudogestor');
            $table->string('estado');  
            $table->unsignedBigInteger('park');
            $table->foreign('park')->references('id')->on('locations');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        //
    }
}
