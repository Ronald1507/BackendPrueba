<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calles;
use Illuminate\Support\Facades\DB;
use App\Models\Comunas;

class CallesController extends Controller
{
    public function index()
    {
        $calle = Calles::all();
        return $calle;
    }
    public function mostrandoCalles()
    {
        // $resultado = DB::table('calle_comuna')
        // ->join("calles","calle_comuna.id_calle","=","calles.id")
        // ->join("comunas","calle_comuna.id_comuna","=","comunas.id")->select("calles.nombre_calle","comunas.nombre_comuna")->get();
        // return $resultado;
        $resultado = DB::table('calle_comuna')
        ->join("calles","calle_comuna.id_calle","=","calles.id")
        ->join("comunas","calle_comuna.id_comuna","=","comunas.id")
        ->join("provincias", "comunas.id_provincia","=","provincias.id")
        ->join("regions","provincias.id_region","=","regions.id")
        ->select("calle_comuna.id","calles.id as id_calle", "calles.nombre_calle", "comunas.id as id_comuna","comunas.nombre_comuna","provincias.id as id_provincia","provincias.nombre_provincia","regions.id as id_region","regions.nombre_region")        
        // ->select("*")        
        // ->select("calle_comuna.id","calles.id as id_calle")
        ->get();
        return $resultado;
    }  
    public function store(Request $request)
    {
        $calle = new Calles();
        $calle->nombre_calle = $request->nombre_calle;             
        $calle->save();        
        $calle->comuna()->attach($request->id); 
    }   


    public function update(Request $request)
    {
        $calle = Calles::findOrFail($request->id);
        $calle->nombre_calle = $request->nombre_calle;             
        $calle->save();        
        // $calle->comuna()->attach($request->id); 
    }   


    public function listarCalle($id){
        $resultado = DB::table('calle_comuna')
        ->join("calles","calle_comuna.id_calle","=","calles.id")
        ->join("comunas","calle_comuna.id_comuna","=","comunas.id")
        ->join("provincias", "comunas.id_provincia","=","provincias.id")
        ->join("regions","provincias.id_region","=","regions.id")
        // ->select("*")
        ->select("calle_comuna.id","calles.id as id_calle", "calles.nombre_calle", "comunas.id as id_comuna","comunas.nombre_comuna","provincias.id as id_provincia","provincias.nombre_provincia","regions.id as id_region","regions.nombre_region")        
        ->where("calles.id","=",$id)
        ->get();
        return $resultado;
    }


    public function destroy(Request $request)
    {
        $calle = DB::table('calle_comuna')
        ->delete($request->id);
        return $calle;


        
    }
}
