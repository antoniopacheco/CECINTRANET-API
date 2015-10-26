<?php

use Illuminate\Database\Seeder;

class MovimientoEstados_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('movimiento_estados')->insert(array(
        	array('estado' => 'pendiente a enlazar'),
        	array('nombre' => 'Enlazado'),
        	array('nombre' => 'Sin Coincidencia')
        ));
    }
}
