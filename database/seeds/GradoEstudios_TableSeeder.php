<?php

use Illuminate\Database\Seeder;

class GradoEstudios_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('grado_estudios')->insert(array(
        	array('grado' => 'Primaria'),
        	array('grado' => 'Secundaria'),
        	array('grado' => 'Preparatoria'),
        	array('grado' => 'Licenciatura'),
        	array('grado' => 'Maestria'),
        	array('grado' => 'Doctorado')
        ));
    }
}
