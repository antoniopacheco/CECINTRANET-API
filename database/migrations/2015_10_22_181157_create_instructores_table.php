<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstructoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_completo');
            $table->string('direccion');
            $table->string('email')->nullable();
            $table->string('email2')->nullable();
            $table->string('celular')->nullable();
            $table->string('telefono')->nullable();
            $table->string('RFC')->unique();
            $table->string('CURP')->unique();
            $table->text('cursos')->nullable();
            $table->boolean('activo')->default(1);
            $table->text('disponibilidad')->nullable();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instructores');
    }
}
