<?php

use Illuminate\Database\Seeder;

class CursoTipos_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('curso_tipos')->insert(array(
        	array('tipo_curso' => 'Curso'),
        	array('tipo_curso' => 'Curso / Taller'),
        	array('tipo_curso' => 'Video Conferencia'),
        	array('tipo_curso' => 'Seminario'),
        	array('tipo_curso' => 'Diplomado'),
        	array('tipo_curso' => 'Maestría'),
        	array('tipo_curso' => 'Doctorado'),
        	array('tipo_curso' => 'Especialidad'),
        	array('tipo_curso' => 'Licenciatura'),
        	array('tipo_curso' => 'Bachillerato'),
        	array('tipo_curso' => 'Conferencia')
       	));
    }
}
