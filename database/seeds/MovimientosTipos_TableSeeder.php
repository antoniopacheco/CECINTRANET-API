<?php

use Illuminate\Database\Seeder;

class MovimientosTipos_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('movimiento_tipos')->insert(array(
        	array('tipo' => 'Deposito en Efectivo'),
        	array('tipo' => 'Pago Cuenta de Tercero'),
        	array('tipo' => 'Cheque')
        )); 	
    }
}
