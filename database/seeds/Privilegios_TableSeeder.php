<?php

use Illuminate\Database\Seeder;

class Privilegios_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   	{
   		$aplicaciones = DB::table('aplicaciones')->get();
   		foreach ($aplicaciones as $aplicacion) {
   			DB::table('privilegios')->insert(
   				array(
	        		'user_id' => 1,
	        		'aplicacion_id' => $aplicacion->id,
	        		'privilegios_tipo_id' => 2,
	        		'created_at' => date("Y-m-d H:i:s"),
		        	'updated_at' => date("Y-m-d H:i:s")
		        )
        	);
   		}
         
    }
}
