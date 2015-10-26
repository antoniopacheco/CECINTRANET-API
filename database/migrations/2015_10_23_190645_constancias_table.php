<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConstanciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constancias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_grupo_id')->unsigned();
            $table->boolean('entregado')->default(0);
            $table->string('nota')->nullable();
            $table->integer('created_by')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('alumno_grupo_id')->references('id')->on('alumno_grupos');
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
        Schema::drop('constancias');
    }
}
