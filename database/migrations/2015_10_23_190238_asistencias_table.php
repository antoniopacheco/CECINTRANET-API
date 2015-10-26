<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('asistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('clase_id')->unsigned();
            $table->integer('asistencia_tipo_id')->unsigned();

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('clase_id')->references('id')->on('clases');
            $table->foreign('asistencia_tipo_id')->references('id')->on('asistencia_tipos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('asistencias');
    }
}
