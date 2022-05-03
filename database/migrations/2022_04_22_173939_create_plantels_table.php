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
        Schema::create('plantels', function (Blueprint $table) {
            $table->id();
            $table->string('clavePlantel',20);
            $table->string('nombrePlantel',40);
            $table->string('localidad',30);
            $table->string('fechaRegistro',30);
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
        Schema::dropIfExists('plantels');
    }
};
