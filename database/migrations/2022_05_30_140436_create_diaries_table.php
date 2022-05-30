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
        Schema::create('diaries', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('LLave Primaria Tabla de Agenda Medica');
            $table->timestamp('date_diary')->nullable()->comment('Campo que almacena la fecha de la cita');
            $table->unsignedBigInteger('id_doctor')->nullable()->comment('Llave Forenea con Doctores');
            $table->foreign('id_doctor')->references('id')->on('doctors');
            $table->timestamps();
        });
    }

    /**
     * @method down  -  Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diaries');
    }
};
