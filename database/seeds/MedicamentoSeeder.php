<?php

use Illuminate\Database\Seeder;
use App\Models\Medicamento;
class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 1000; $i++) { 
            
            $num = round(rand(1,50)/25, 3);
            if ($i<10) {
                ;
                Medicamento::create([
                    
                    'codigo'        =>  "00000$i",
                    'precio_venta'  =>  $num,
                    'descripcion'  =>  "Descripcion $i",
                    'condicion'     =>  1,
                    'producto_id'   =>  rand(1, 6833),
                    'presentacion_id'   =>  rand(1, 6),
                    'concentracion_id'   =>  rand(1,6),
                    'laboratorio_id'   =>  rand(1,6)

                ]);
            }
            if ($i>=10 && $i <100) {
                ;
                Medicamento::create([
                    'codigo'    =>  "0000$i",
                    'precio_venta'  =>  $num,
                    'descripcion'  =>  "Descripcion $i",
                    'condicion'     =>  1,
                    'producto_id'   =>  rand(1, 6833),
                    'presentacion_id'   =>  rand(1, 6),
                    'concentracion_id'   =>  rand(1,6),
                    'laboratorio_id'   =>  rand(1,6)
                ]);
            }
            if ($i>=100) {
                ;
                Medicamento::create([
                    'codigo'    =>  "000$i",
                    'precio_venta'  =>  $num,
                    'descripcion'  =>  "Descripcion $i",
                    'condicion'     =>  1,
                    'producto_id'   =>  rand(1, 6833),
                    'presentacion_id'   =>  rand(1, 6),
                    'concentracion_id'   =>  rand(1,6),
                    'laboratorio_id'   =>  rand(1,6)
                ]);
            }
        }
    }
}
