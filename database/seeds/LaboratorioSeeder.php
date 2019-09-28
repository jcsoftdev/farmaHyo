<?php

use Illuminate\Database\Seeder;
use App\Models\Laboratorio;

class LaboratorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lab = [
            '3M',
            'A Y B MEDIC',
            'ALESSI',
            'ALKOFARMA',
            'ALKOFHAR',
            'AMERICA',
            'ARO',
            'AVAL',
            'BESI',
            'BPM',
            'BRAUN',
            'BUFALO',
            'CIRUJIA PERUANA',
            'CKF',
            'COLGATE',
            'COMIWA',
            'CONTINENTAL',
            'COPPON',
            'D Y R',
            'DAGO',
            'DENSPLY',
            'DENTAURUM',
            'DENTITO',
            'DENTO',
            'DENTORIUM',
            'DENTS',
            'DIAMOND',
            'DIMEDA GERMANY',
            'ENDOMEDIC',
            'EUFAR',
            'FIRTS CLASS',
            'GALENO',
            'GAMED',
            'GERMANY',
            'GUILLETTE',
            'HANDLE 59',
            'HI-MED',
            'IMPORTADO',
            'INDIRAL',
            'INDUSTRIA ARGENTINA',
            'INTRAVEN',
            'IVOCLAR',
            'JPS',
            'JUMILSAN',
            'KD-JECT',
            'KIT',
            'LABON',
            'LOYLA',
            'LUSA',
            'MAQUIRA',
            'MEDESY',
            'MEDIANCE',
            'MEDICAL',
            'MENZHER',
            'MICRODONT',
            'MORELLI',
            'NACIONAL',
            'NALLONDI',
            'NIPRO',
            'NORDENT',
            'OLYMPIC',
            'OLYMPIC PLUS',
            'ONE-JECT',
            'ORION',
            'PHAKM',
            'PLENITUD',
            'PORTUGAL',
            'PORUCRYL',
            'PROMED',
            'Q-MEDIC',
            'QUIROFANO',
            'REESMILE',
            'REGURIMAXX',
            'RIMER-DENT',
            'RYNCO',
            'SAONA',
            'SEGURIMAX',
            'SEPLYSI',
            'SHERFARMA',
            'SHICK',
            'SIGMA',
            'STAR ROLLS',
            'STERIMAXX',
            'SUCTION CLEAN',
            'SWE DENT',
            'TAGUM',
            'TDM',
            'TOPWAX',
            'UNILENE',
            'UNILEVER',
            'UNIVERSAL',
            'URITEL',
            'VITACRYL',
            'VITAFOIL',
            'VITALIS'

        ];
        foreach ($lab as $key => $value) {
            # code...
        }
        for ($i=0; $i <  count($lab); $i++) { 
            Laboratorio::create([
           'nombre'	=>  $lab[$i],
           'descripcion' => strtoupper('descripcion de Laboratorio'),
           'condicion' => 1
        ]);
        }
        
    }
}
