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
                'nombre_calle'=> 'Paicavi',
                'id_comuna'=>23
            ],
            [
                'nombre_calle'=> 'Arturo Prat',
                'id_comuna'=>100
            ],
            [
                'nombre_calle'=> 'Los Carrera',
                'id_comuna'=>235
            ],
            [
                'nombre_calle'=> 'Freire',
                'id_comuna'=>1                
            ],
            [
                'nombre_calle'=> 'Alameda',
                'id_comuna'=>230
            ]
        ]);
    }
}
