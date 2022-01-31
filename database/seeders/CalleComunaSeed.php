<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CalleComunaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calle_comuna')->insert([
            [
                'id_comuna'=> 1,
                'id_calle'=> 2
            ],
            [
                'id_comuna'=> 2,
                'id_calle'=> 2
            ],
            [
                'id_comuna'=> 3,
                'id_calle'=> 5
            ],
            [
                'id_comuna'=> 4,
                'id_calle'=> 4
            ],
            [
                'id_comuna'=> 4,
                'id_calle'=> 4
            ],
            [
                'id_comuna'=> 3,
                'id_calle'=> 1
            ]
        ]);
    }
}
