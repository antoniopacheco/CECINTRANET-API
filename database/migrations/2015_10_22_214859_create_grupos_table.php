<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('curso_id')->unsigned();
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_final');
            $table->integer('capacidad_alumnos')->unsigned();
            $table->integer('aula_actual')->unsigned();
            $table->integer('instructor_actual')->unsigned();
            $table->boolean('publico')->default(1);
            $table->boolean('web')->default(1);
            $table->integer('coordinador')->unsigned();
            $table->integer('curso_estado_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->decimal('costo_general', 8, 2);
            $table->decimal('costo_empleado', 8, 2);
            $table->decimal('costo_politecnico', 8, 2);
            $table->decimal('costo_becado', 8, 2);
            $table->decimal('costo_empresario', 8, 2);
            $table->integer('no_ano')->unsigned();


            $table->timestamps();
            $table->softDeletes();
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('aula_actual')->references('id')->on('aulas');  //quien lo creó
            $table->foreign('instructor_actual')->references('id')->on('instructores');  //quien lo creó
            $table->foreign('coordinador')->references('id')->on('users');
            $table->foreign('curso_estado_id')->references('id')->on('curso_estados');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('grupos');
    }
}
