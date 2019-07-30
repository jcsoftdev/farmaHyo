<?php

use Illuminate\Database\Seeder;
use App\Models\Presentacion;

class PresentacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Presentacion::create([
            'nombre'	=>  "Tableta",
            'descripcion' => 'descripcion de Presentacion ',
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'	=>  "Inyectable",
            'descripcion' => 'descripcion de Presentacion ',
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'	=>  "Capsula Blanda",
            'descripcion' => 'descripcion de Presentacion ',
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'  =>  "Suspension Oral",
            'descripcion' => 'descripcion de Presentacion ',
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'	=>  "Comprimido Masticable",
            'descripcion' => 'descripcion de Presentacion ',
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'	=>  "Solución Oftálmica",
            'descripcion' => 'descripcion de Presentacion ',
            'condicion' => 1
        ]);
    }
}
