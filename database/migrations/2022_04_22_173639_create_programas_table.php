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
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('id_UnicoPro',20);
            $table->string('tipoProgra',30);
            $table->string('fechaInicioBeca',30);
            $table->string('fechaFinBeca',30);
            $table->string('clavePlantel',20);
            $table->string('fechaRegistro',30);
            $table->integer('horasCubrir');
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
        Schema::dropIfExists('programas');
    }
};
