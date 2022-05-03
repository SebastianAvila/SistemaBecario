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
        Schema::create('registro__alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('id_UnicoAlum',15);
            $table->string('fechaEntrada',15);
            $table->string('fechaSalida',15);
            $table->integer('horaEntrada');
            $table->integer('horaSalida');
            $table->integer('horasRealizadas');
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
        Schema::dropIfExists('registro__alumnos');
    }
};
