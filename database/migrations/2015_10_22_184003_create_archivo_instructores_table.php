<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivoInstructoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo_instructores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instructor_id')->unsigned();
            $table->string('descripcion');
            $table->string('url');
            $table->softDeletes();
            $table->timestamps();
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
        Schema::drop('archivo_instructores');
    }
}
