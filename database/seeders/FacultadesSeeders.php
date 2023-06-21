<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class FacultadesSeeders extends Seeder
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
                'cod_facultad'=> '10',
                'nom_facultad'=> 'Artes',
            ],
            [
                'cod_facultad'=> '11',
                'nom_facultad'=> 'Ingenieria',
            ],
            [
                'cod_facultad'=> '12',
                'nom_facultad'=> 'Derecho',
            ],
            [
                'cod_facultad'=> '13',
                'nom_facultad'=> 'Educacion',
            ],
            [
                'cod_facultad'=> '14',
                'nom_facultad'=> 'Ciencias exactas y naturales',
            ]
        ];

            DB::table('facultad')->insert($datos); 
    }
}
