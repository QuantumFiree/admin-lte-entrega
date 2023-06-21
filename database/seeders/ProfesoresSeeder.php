<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class ProfesoresSeeder extends Seeder
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
                'cod_profesor'=> '30',
                'nom_profesor'=> 'Bill Gates',
                'facultad' => '11',
            ],
            [
                'cod_profesor'=> '31',
                'nom_profesor'=> 'Alexander Volkanovski',
                'facultad' => '11',
            ],
            [
                'cod_profesor'=> '32',
                'nom_profesor'=> 'Alistar Overeem',
                'facultad' => '14',
            ],
            [
                'cod_profesor'=> '33',
                'nom_profesor'=> 'Niokla Tesla',
                'facultad' => '11',
            ],
            [
                'cod_profesor'=> '34',
                'nom_profesor'=> 'Inmanuel Kant',
                'facultad' => '12',
            ],
        ];

            DB::table('profesor')->insert($datos);
    }
}
