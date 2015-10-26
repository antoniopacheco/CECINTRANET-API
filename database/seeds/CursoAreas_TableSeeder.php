<?php

use Illuminate\Database\Seeder;

class CursoAreas_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('curso_areas')->insert(array(
        	array('area' => 'Ingeniería'),
        	array('area' => 'Informática'),
        	array('area' => 'Seguridad e Higiene'),
        	array('area' => 'Desarrollo Humano y Calidad'),
        	array('area' => 'Salud'),
        	array('area' => 'Administrativa Contable y Legal')
       	));
    }
}
