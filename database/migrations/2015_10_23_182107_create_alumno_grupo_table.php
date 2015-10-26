<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('alumno_grupo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->integer('alumno_id')->unsigned();
            $table->decimal('costo', 8, 2);
            $table->string('referencia')->unique();
            $table->integer('grupo_status_alumno_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->boolean('requiere_factura');
            $table->text('contacto_factura')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('grupo_status_alumno_id')->references('id')->on('grupo_status_alumnos');         
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('alumno_grupo');
    }
}
