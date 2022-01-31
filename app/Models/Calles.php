<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calles extends Model
{
    use HasFactory;

    //relacion muchos a muchos calle-comuna
    public function comuna(){
        return $this->belongsToMany(Comunas::class, 'calle_comuna', 'id_calle', 'id_comuna')->withPivot('id_comuna');
    }
} 
