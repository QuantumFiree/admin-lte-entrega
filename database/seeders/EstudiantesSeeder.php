<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class EstudiantesSeeder extends Seeder
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
                'cod_estudiante'=> '40',
                'nom_estudiante'=> 'Randy Cotour',
                'programa' => '21',
                'facultad' => '11',
            ],
            [
                'cod_estudiante'=> '41',
                'nom_estudiante'=> 'Jon Jones',
                'programa' => '20',
                'facultad' => '11',
            ],
            [
                'cod_estudiante'=> '42',
                'nom_estudiante'=> 'Ice Cube',
                'programa' => '20',
                'facultad' => '11',
            ],
            [
                'cod_estudiante'=> '43',
                'nom_estudiante'=> 'Jeff Bezos',
                'programa' => '22',
                'facultad' => '14',
            ],
            [
                'cod_estudiante'=> '44',
                'nom_estudiante'=> 'Andres Caicedo',
                'programa' => '22',
                'facultad' => '14',
            ],
        ];

            DB::table('estudiante')->insert($datos);
    }
}
