<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calles')->insert([
            [
                'nombre_calle'=> 'Paicavi'
            ],
            [
                'nombre_calle'=> 'Arturo Prat'
            ],
            [
                'nombre_calle'=> 'Los Carrera'
            ],
            [
                'nombre_calle'=> 'Freire'
            ],
            [
                'nombre_calle'=> 'Alameda'
            ]
        ]);
    }
}
