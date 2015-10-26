<?php

use Illuminate\Database\Seeder;

class PrivilegiosTipos_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('privilegios_tipos')->insert(array(
        	array('tipo' => 'Lectura'),
        	array('tipo' => 'Lectura/Escritura')
        )); 	
    }
}
