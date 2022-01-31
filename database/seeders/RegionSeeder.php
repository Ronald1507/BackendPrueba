<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            [
                'nombre_region'=> 'Arica y Parinacota'
            ],
            [
                'nombre_region'=> 'Tarapacá'
            ],
            [
                'nombre_region'=> 'Antofagasta'
            ],
            [
                'nombre_region'=> 'Atacama'
            ],
            [
                'nombre_region'=> 'Coquimbo'
            ],
            [
                'nombre_region'=> 'Valparaiso'
            ],
            [
                'nombre_region'=> 'Metropolitana de Santiago'
            ],
            [
                'nombre_region'=> 'Libertador General Bernardo O`Higgins'
            ],
            [
                'nombre_region'=> 'Maule'
            ],
            [
                'nombre_region'=> 'Ñuble'
            ],
            [
                'nombre_region'=> 'Biobío'
            ],
            [
                'nombre_region'=> 'La Araucanía'
            ],
            [
                'nombre_region'=> 'Los Ríos'
            ],
            [
                'nombre_region'=> 'Los Lagos'
            ],
            [
                'nombre_region'=> 'Aisén del General Carlos Ibañez del Campo'
            ],
            [
                'nombre_region'=> 'Magallanes y de la Antartica Chilena'
            ]
        ]);
    }
}
