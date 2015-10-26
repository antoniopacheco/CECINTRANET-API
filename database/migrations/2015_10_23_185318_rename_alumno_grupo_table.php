<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameAlumnoGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::rename('alumno_grupo', 'alumno_grupos');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::rename('alumno_grupos', 'alumno_grupo');
    }
}
