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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string ('id_UnicoAlumn',15);
            $table->string ('primerNomBeca', 20);
            $table->string ('segundoNomBeca',20);
            $table->string ('apellidoPaterBeca',20);
            $table->string ('apellidoMaterBeca',20);
            $table->integer('celular');
            $table->string ('correoElec',40);
            $table->string ('horasCubiertas',4);
            $table->string ('id_UnicoPro',20);
            $table->string ('clavePlantel',20);
            $table->string ('fechaRegistro',30);
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
        Schema::dropIfExists('alumnos');
    }
};
