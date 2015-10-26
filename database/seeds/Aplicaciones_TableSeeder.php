<?php

use Illuminate\Database\Seeder;

class Aplicaciones_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('aplicaciones')->insert(array(
        	array(
        		'nombre' => 'Directorio',
        		'descripcion' => 'Directorio Télefonico del Centro',
        		'publico' => TRUE
        	),
        	array(
        		'nombre' => 'Instructores',
        		'descripcion' => 'Lista Nacional de Instructores de la Red de Centros',
        		'publico' => FALSE
        	),
        	array(
        		'nombre' => 'aplicaciones',
        		'descripcion' => 'Administrador de Aplicaciones y Permisos',
        		'publico' => FALSE
        	),
        	array(
        		'nombre' => 'Grupos',
        		'descripcion' => 'Lista de Grupos finalizados, actuales y programados',
        		'publico' => FALSE
        	),
        	array(
        		'nombre' => 'Oferta Academica',
        		'descripcion' => 'Lista de la Oferta Academica',
        		'publico' => FALSE
        	),
        	array(
        		'nombre' => 'Pagos',
        		'descripcion' => 'Control de Pagos de los alumnos',
        		'publico' => FALSE
        	),
        	array(
        		'nombre' => 'Alumnos',
        		'descripcion' => 'Información de los alumnos del Centro',
        		'publico' => FALSE
        	),
        	array(
        		'nombre' => 'Usuarios',
        		'descripcion' => 'Administracion de usuarios',
        		'publico' => FALSE
        	),
        	array(
        		'nombre' => 'Solicitud de Servicios',
        		'descripcion' => 'Solicitud de Servicios informáticos',
        		'publico' => FALSE
        	),
        	array(
        		'nombre' => 'Constancias',
        		'descripcion' => 'Control de Constancias',
        		'publico' => FALSE
        	)
        )); 
    }
}
