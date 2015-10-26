<?php

use Illuminate\Database\Seeder;

class CursoEstados_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	DB::table('curso_estados')->insert(array(
        	array('estado' => 'Próximo'),
        	array('estado' => 'En Marcha'),
        	array('estado' => 'Finalizado'),
        	array('estado' => 'Bloqueado'),
        	array('estado' => 'Cancelado')
       	));
    }
}
