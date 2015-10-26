<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned();
            $table->integer('aula_id')->unsigned();
            $table->dateTime('inicio');
            $table->dateTime('fin');
            $table->integer('instructor_id')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->integer('created_by')->unsigned();

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('grupo_id')->references('id')->on('grupos');
            $table->foreign('aula_id')->references('id')->on('aulas');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('created_by')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clases');
    }
}
