<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @author CRISTHIAN CAMILO RODRIGUEZ GALINDO <camilorodri28@outlook.com>
 */
return new class extends Migration
{
    /**
     * @method up  -  Metodo que ejecuta la migracion de creacion de tabla de tipos de vivienda
     * @return void
     */
    public function up()
    {
        Schema::create('appoinments', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('LLave Primaria Tabla de Citas Medicas');
            $table->unsignedBigInteger('id_patient')->nullable()->comment('Llave Forenea con Pacientes');
            $table->unsignedBigInteger('id_diaries')->nullable()->comment('Llave Forenea con Agenda Medica');
            $table->foreign('id_patient')->references('id')->on('patients');
            $table->foreign('id_diaries')->references('id')->on('diaries');
            $table->timestamps();
        });
    }

    /**
     * @method down  -  Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appoinments');
    }
};
