<?php

use Illuminate\Database\Seeder;

class DiscapacidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discapacidades')->insert(array(
        	array('discapacidad' => 'Ninguna'),
        	array('discapacidad' => 'Usa Muletas'),
        	array('discapacidad' => 'Uso de bastón'),
        	array('discapacidad' => 'Usa silla de ruedas'),
        	array('discapacidad' => 'Usa aparatos ortopédicos'),
        	array('discapacidad' => 'Uso de aparatos auxiliares para escuchar y hablar'),
        	array('discapacidad' => 'Persona de talla baja (enanismo)'),
        	array('discapacidad' => 'Falta de algún miembro de su cuerpo')
        ));
    }
}
