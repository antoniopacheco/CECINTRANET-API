<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        Model::unguard();
        $this->call(DiscapacidadesTableSeeder::class);
        $this->call(SexosTableSeeder::class);
        $this->call(SedesTableSeeder::class);
        $this->call(TipoEstudio_TableSeeder::class);
        $this->call(GradoEstudios_TableSeeder::class);
        $this->call(TipoAlumnos_TableSeeder::class);
        $this->call(CursoTipos_TableSeeder::class);
        $this->call(CursoAreas_TableSeeder::class);
        $this->call(Modalidades_TableSeeder::class);
        $this->call(CursoEstados::class);
        $this->call(GrupoStatusAlumnos_TableSeeder::class);
        $this->call(AsistenciaTipos_TableSeeder::class);
        $this->call(MovimientoEstados_TableSeeder::class);
        $this->call(MovimientosTipos_TableSeeder::class);
        $this->call(Aplicaciones_TableSeeder::class);
        $this->call(PrivilegiosTipos_TableSeeder::class);
        $this->call(Users_TableSeeder::class);
        Model::reguard();
    }
}
