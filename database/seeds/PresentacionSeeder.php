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
        $presentacion = [
            'BLISTER',
            'AMPOLLA',
            'BARRA',
            'BOLSA',
            'BOLSA  X 50 UN',
            'BOTELLA',
            'CAJA',
            'CAJA',
            'CAPSULAS',
            'CARTUCHO',
            'CASSETTE',
            'CJA',
            'CJA  X 100',
            'CJA  X 150',
            'CJA  X 200GRS',
            'CJA  X25',
            'CJA X 8 UND',
            'CJA X100',
            'CREMA',
            'EMPAQUE',
            'FRASCO',
            'FRASCO X 12',
            'GALON',
            'GEL',
            'GOTAS',
            'GOTAS  OFTALMICAS',
            'GRAGEAS',
            'GRASCO',
            'JARABE',
            'JERINGA',
            'KIT',
            'LAMINA',
            'LIBRA',
            'METRO',
            'PAQUETE',
            'PARES',
            'PLACAS',
            'POMADA',
            'PORCION',
            'POTE',
            'ROLLO',
            'SACHET',
            'SOBRE',
            'SOLUCION',
            'SPRAY',
            'SUSPENSIÓN',
            'TABLETA',
            'TABLETA COMPRIMIDO',
            'TABLETAS',
            'TAPOR',
            'TIRA',
            'TUBO',
            'TUBOS',
            'UND',
            'UND',
            'UND  X 100',
            'UND X 100',
            'UNGÜENTO '
        ];
        for ($i=0; $i < count($presentacion); $i++) { 
            Presentacion::create([
            'nombre'	=>  $presentacion[$i],
            'descripcion' => strtoupper('descripcion de Presentacion '),
            'condicion' => 1
        ]);
        }
        
    }
}
