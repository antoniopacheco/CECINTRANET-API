<?php

use Illuminate\Database\Seeder;

class Modalidades_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('modalidades')->insert(array(
        	array('modalidad' => 'A Distancia'),
        	array('modalidad' => 'Presencial'),
        	array('modalidad' => 'Mixta')
       	));
    }
}
