<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class ProgramasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'cod_programa'=>'20',
                'nom_programa'=>'Ingenieria de sistemas',
                'facultad'=>'11'
            ],
            [
                'cod_programa'=>'21',
                'nom_programa'=>'Ingenieria de electronica',
                'facultad'=>'11'
            ],
            [
                'cod_programa'=>'22',
                'nom_programa'=>'Ingenieria de software',
                'facultad'=>'11'
            ],
            [
                'cod_programa'=>'23',
                'nom_programa'=>'Fisica',
                'facultad'=>'14'
            ],
            [
                'cod_programa'=>'24',
                'nom_programa'=>'Quimica',
                'facultad'=>'14'
            ]
        ];
        DB::table('programa')->insert($datos);

    }
}
