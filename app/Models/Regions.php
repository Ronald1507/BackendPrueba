<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Regions extends Model
{
    use HasFactory;

    //Relacion 1 a n
    public function provincias(){
        return $this->hasMany('App\Models\Provincias');
    }
}
