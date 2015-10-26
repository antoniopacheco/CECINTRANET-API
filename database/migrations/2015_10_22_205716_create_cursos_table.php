<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');
            $table->integer('user_id')->unsigned();
            $table->integer('tipo_id')->unsigned();
            $table->integer('area_id')->unsigned();
            $table->integer('modalidad_id')->unsigned();
            $table->string('letra_referencia')->unique();
            $table->integer('horas_total')->unsigned();
            $table->text('objetivo')->nullable();
            $table->text('dirijio_a')->nullable();
            $table->text('requisitos')->nullable();
            $table->text('perfil_ingreso')->nullable();
            $table->text('temario')->nullable();
            $table->text('introduccion')->nullable();
            $table->text('conocimientos')->nullable();
            $table->boolean('mostrar_web')->default(1);
            $table->text('mas_info')->nullable();
            $table->string('imagen_url')->nullable();
            $table->string('banner_url')->nullable();
            $table->string('video_url')->nullable();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');  //quien lo creó
            $table->foreign('tipo_id')->references('id')->on('curso_tipos'); //curso, taller..
            $table->foreign('area_id')->references('id')->on('curso_areas'); //ingenieria, informatica.
            $table->foreign('modalidad_id')->references('id')->on('modalidades'); //presencial, distancia

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cursos');
    }
}
