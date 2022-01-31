<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunas extends Model
{
    use HasFactory;

    //1,n provincias comunas
    public function provincias(){
        return $this->belongsTo('App\Models\Provincias');
    }

    //relacion muchos a muchos calle-comuna
    public function calle(){
        return $this->belongsToMany(Calles::class, 'calle_comuna', 'id_comuna', 'id_calle')->withPivot('id_calle');
    }
}
 