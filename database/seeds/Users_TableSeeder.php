<?php

use Illuminate\Database\Seeder;

class Users_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	$sede = env('DEFAULT_SEDE');
    	DB::table('users')->insert(
    		array(
	       		'name' => 'Administrador',
	        	'email' => 'admin@cectijuana.com',
	        	'password' => Hash::make('P@ssw0rd'),
	        	'sede_id' => $sede,
	        	'created_at' => date("Y-m-d H:i:s"),
	        	'updated_at' => date("Y-m-d H:i:s")
	        	)
    		);
    }
}
