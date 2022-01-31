<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincias extends Model
{
    use HasFactory;

    //relacion 1,n provincia regiones
    public function regiones(){
        return $this->belongsTo('App\Models\Regions');
    }

    //relacion 1,n provincia comuna
    public function comunas(){
        return $this->hasMany('App\Models\Comunas');
    }
}
