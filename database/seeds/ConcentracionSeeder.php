<?php

use Illuminate\Database\Seeder;
use App\Models\Concentracion;
class ConcentracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Concentracion::create([
            'nombre'	=>  "0.5 mg",
            'descripcion' => 'descripcion de concentracion '
        ]);
        Concentracion::create([
            'nombre'	=>  "300 mg",
            'descripcion' => 'descripcion de concentracion '
        ]);
        Concentracion::create([
            'nombre'	=>  "600 mg",
            'descripcion' => 'descripcion de concentracion '
        ]);
        Concentracion::create([
            'nombre'  =>  "1200 mg",
            'descripcion' => 'descripcion de concentracion '
        ]);
        Concentracion::create([
            'nombre'	=>  "1.5 mg",
            'descripcion' => 'descripcion de concentracion '
        ]);
        Concentracion::create([
            'nombre'	=>  "10 mg",
            'descripcion' => 'descripcion de concentracion '
        ]);
    }
}
