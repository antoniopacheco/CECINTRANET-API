<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('movimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movimiento_tipo_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->integer('updated_by')->unsigned();
            $table->date('fecha');
            $table->string('movimiento')->unique();
            $table->string('referencia');
            $table->decimal('abono', 8, 2);
            $table->string('cuenta');
            $table->integer('movimiento_estado_id')->unsigned();

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('movimiento_tipo_id')->references('id')->on('movimiento_tipos');
            $table->foreign('movimiento_estado_id')->references('id')->on('movimiento_estados');
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
        Schema::drop('movimientos');
    }
}
