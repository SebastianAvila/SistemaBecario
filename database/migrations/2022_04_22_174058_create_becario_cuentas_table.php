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
        Schema::create('becario_cuentas', function (Blueprint $table) {
            $table->id();
            $table->string('id_UnicoAlum',20);
            $table->string('correo_Becario',20);
            $table->string('pass_becario',50);
            $table->string('horasRestantes',3);
            $table->string('tipo',13);
            $table->string('fechaInicioPresta',40);
            $table->string('fechaFinPresta',40);
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
        Schema::dropIfExists('becario_cuentas');
    }
};
