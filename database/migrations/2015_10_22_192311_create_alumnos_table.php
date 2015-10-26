<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->integer('sexo_id')->unsigned();
            $table->dateTime('fecha_nacimiento')->nullable();
            $table->string('RFC')->unique();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('escuela_procedencia')->nullable();
            $table->integer('grado_esutdio_id')->unsigned();
            $table->integer('discapacidad_id')->unsigned();
            $table->integer('alumno_tipo_id')->unsigned();
            $table->string('comprobante')->nullable();
            $table->string('matricula')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sexo_id')->references('id')->on('sexos'); 
            $table->foreign('grado_esutdio_id')->references('id')->on('grado_estudios');
            $table->foreign('discapacidad_id')->references('id')->on('discapacidades');
            $table->foreign('alumno_tipo_id')->references('id')->on('alumno_tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alumnos');
    }
}
