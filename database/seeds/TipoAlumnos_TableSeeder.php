<?php

use Illuminate\Database\Seeder;

class TipoAlumnos_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('alumno_tipos')->insert(array(
        	array('tipo' => 'General'),
        	array('tipo' => 'Empleado'),
        	array('tipo' => 'Egresado Politecnico'),
        	array('tipo' => 'Becado'),
        	array('tipo' => 'Empresario')
       	));
    }
}
