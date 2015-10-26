<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructoAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor_academicos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instructor_id')->unsigned();
            $table->integer('tipo_estudio_id')->unsigned();
            $table->string('nombre');
            $table->string('lugar')->nullable();
            $table->string('fecha')->nullable();
            $table->string('cedula')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('instructor_id')->references('id')->on('instructores'); 
            $table->foreign('tipo_estudio_id')->references('id')->on('tipo_estudios');                       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instructor_academicos');
    }
}
