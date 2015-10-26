<?php

use Illuminate\Database\Seeder;

class AsistenciaTipos_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('asistencia_tipos')->insert(array(
        	array('tipo' => 'Asistido'),
        	array('tipo' => 'Falta'),
        	array('tipo' => 'Retardo'),
        	array('tipo' => 'Justificado')
        ));
    }
}
