<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructorExperienciaAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_instructor_experiencia_academicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instructor_id')->unsigned();
            $table->string('lugar')->nullable();
            $table->string('curso')->nullable();
            $table->string('fecha_inicio')->nullable();
            $table->string('fecha_fin')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('instructor_id')->references('id')->on('instructores');             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipo_instructor_experiencia_academicas');
    }
}
