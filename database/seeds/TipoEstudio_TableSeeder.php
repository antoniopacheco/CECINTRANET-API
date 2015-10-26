<?php

use Illuminate\Database\Seeder;

class TipoEstudio_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('tipo_estudios')->insert(array(
        	array('tipo' => 'Curso'),
        	array('tipo' => 'Bachillerato'),
        	array('tipo' => 'Licenciatura'),
        	array('tipo' => 'Maestría'),
        	array('tipo' => 'Doctorado'),
        	array('tipo' => 'Especialidad'),
        	array('tipo' => 'Seminario'),
        	array('tipo' => 'Diplomado'),
        	array('tipo' => 'Certificación')
        ));
    }
}
