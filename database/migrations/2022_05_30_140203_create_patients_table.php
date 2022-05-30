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
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('LLave Primaria Tabla de Pacientes');
            $table->string('name')->comment('Nombre del Paciente');
            $table->string('identification_number')->comment('Número de Identificación del Paciente');
            $table->timestamps();
        });
    }

    /**
     * @method down  -  Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
