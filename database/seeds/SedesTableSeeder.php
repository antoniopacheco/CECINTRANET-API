<?php

use Illuminate\Database\Seeder;

class SedesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('sedes')->insert(array(
        	array('nombre' => 'Allende'),
        	array('nombre' => 'Campeche'),
        	array('nombre' => 'Cancún'),
        	array('nombre' => 'Culiacan'),
        	array('nombre' => 'Mazatlán'),
        	array('nombre' => 'Mochis'),
        	array('nombre' => 'Morelia'),
        	array('nombre' => 'Oaxaca'),
        	array('nombre' => 'Reynosa'),
        	array('nombre' => 'Tampico'),
        	array('nombre' => 'Tijuana'),
        	array('nombre' => 'Tlaxcala'),
        	array('nombre' => 'Cajeme'),
        	array('nombre' => 'DEC'),
        	array('nombre' => 'Chihuahua'),
        	array('nombre' => 'Durango'),
        	array('nombre' => 'Guerrero'),
        	array('nombre' => 'Hidalgo'),
        	array('nombre' => 'Moralos'),
        	array('nombre' => 'Veracruz')
        ));
    }
}
