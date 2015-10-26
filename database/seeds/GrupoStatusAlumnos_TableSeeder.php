<?php

use Illuminate\Database\Seeder;

class GrupoStatusAlumnos_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('grupo_status_alumnos')->insert(array(
        	array('status' => 'Pre-Inscrito'),
        	array('status' => 'Inscrito'),
        	array('status' => 'Cancelado'),
        	array('status' => 'Otro'),
        	array('status' => 'Baja (Falta pago)'),
        	array('status' => 'Inscrito (Falta pago)'),
        	array('status' => 'Baja (Inasistencia)')
       	));
    }
}
