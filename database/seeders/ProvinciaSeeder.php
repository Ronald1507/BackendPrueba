<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
            [
                'nombre_provincia'=>'Arica', 
                'id_region'=>1
            ],   
            ['nombre_provincia'=>'Parinacota', 'id_region'=>1],
            ['nombre_provincia'=>'Iquique', 'id_region'=>2],
            ['nombre_provincia'=>'Tamarugal','id_region'=> 2],
            ['nombre_provincia'=>'Antofagasta','id_region'=> 3],
            ['nombre_provincia'=>'El Loa', 'id_region'=>3],
            ['nombre_provincia'=>'Tocopilla', 'id_region'=>3],
            ['nombre_provincia'=>'Copiapó', 'id_region'=>4],
            ['nombre_provincia'=>'Chañaral', 'id_region'=>4],
            ['nombre_provincia'=>'Huasco', 'id_region'=>4],
            ['nombre_provincia'=>'Elqui', 'id_region'=>5],
            ['nombre_provincia'=>'Choapa', 'id_region'=>5],
            ['nombre_provincia'=>'Limarí', 'id_region'=>5],
            ['nombre_provincia'=>'Valparaíso', 'id_region'=>6],
            ['nombre_provincia'=>'Isla De Pascua', 'id_region'=>6],
            ['nombre_provincia'=>'Los Andes', 'id_region'=>6],
            ['nombre_provincia'=>'Petorca', 'id_region'=>6],
            ['nombre_provincia'=>'Quillota', 'id_region'=>6],
            ['nombre_provincia'=>'San Antonio', 'id_region'=>6],
            ['nombre_provincia'=>'San Felipe', 'id_region'=>6],
            ['nombre_provincia'=>'Marga Marga', 'id_region'=>6],
            ['nombre_provincia'=>'Santiago', 'id_region'=>7],
            ['nombre_provincia'=>'Cordillera', 'id_region'=>7],
            ['nombre_provincia'=>'Chacabuco', 'id_region'=>7],
            ['nombre_provincia'=>'Maipo', 'id_region'=>7],
            ['nombre_provincia'=>'Melipilla', 'id_region'=>7],
            ['nombre_provincia'=>'Talagante', 'id_region'=>7],
            ['nombre_provincia'=>'Cachapoal', 'id_region'=>8],
            ['nombre_provincia'=>'Cardenal Caro', 'id_region'=>8],
            ['nombre_provincia'=>'Colchagua', 'id_region'=>8],
            ['nombre_provincia'=>'Talca', 'id_region'=>9],
            ['nombre_provincia'=>'Cauquenes','id_region'=> 9],
            ['nombre_provincia'=>'Curicó', 'id_region'=>9],
            ['nombre_provincia'=>'Linares', 'id_region'=>9],
            ['nombre_provincia'=>'Diguillín', 'id_region'=>10],
            ['nombre_provincia'=>'Itata', 'id_region'=>10],
            ['nombre_provincia'=>'Punilla', 'id_region'=>10],
            ['nombre_provincia'=>'Concepción','id_region'=> 11],
            ['nombre_provincia'=>'Arauco','id_region'=> 11],
            ['nombre_provincia'=>'Bío-Bío', 'id_region'=>11],
            ['nombre_provincia'=>'Cautín', 'id_region'=>12],
            ['nombre_provincia'=>'Malleco','id_region'=>12],
            ['nombre_provincia'=>'Valdivia', 'id_region'=>13],
            ['nombre_provincia'=>'Ranco','id_region'=> 13],
            ['nombre_provincia'=>'Llanquihue', 'id_region'=>14],
            ['nombre_provincia'=>'Chiloé', 'id_region'=>14],
            ['nombre_provincia'=>'Osorno','id_region'=>14],
            ['nombre_provincia'=>'Palena', 'id_region'=>14],
            ['nombre_provincia'=>'Coihayque','id_region'=> 15],
            ['nombre_provincia'=>'Aisén', 'id_region'=>15],
            ['nombre_provincia'=>'Capitán Prat', 'id_region'=>15],
            ['nombre_provincia'=>'General Carrera', 'id_region'=>15],
            ['nombre_provincia'=>'Magallanes', 'id_region'=>16],
            ['nombre_provincia'=>'Antártica Chilena', 'id_region'=>16],
            ['nombre_provincia'=>'Tierra del Fuego', 'id_region'=>16],
            ['nombre_provincia'=>'Última Esperanza', 'id_region'=>16]         
        ]);   
    }
}
