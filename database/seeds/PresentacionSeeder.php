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
            'nombre'	=>  strtoupper("Tableta"),
            'descripcion' => strtoupper('descripcion de Presentacion '),
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'	=>  strtoupper("Inyectable"),
            'descripcion' => strtoupper('descripcion de Presentacion '),
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'	=>  strtoupper("Capsula Blanda"),
            'descripcion' => strtoupper('descripcion de Presentacion '),
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'  =>  strtoupper("Suspension Oral"),
            'descripcion' => strtoupper('descripcion de Presentacion '),
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'	=>  strtoupper("Comprimido Masticable"),
            'descripcion' => strtoupper('descripcion de Presentacion '),
            'condicion' => 1
        ]);
        Presentacion::create([
            'nombre'	=>  strtoupper("Solución Oftálmica"),
            'descripcion' => strtoupper('descripcion de Presentacion '),
            'condicion' => 1
        ]);
    }
}
