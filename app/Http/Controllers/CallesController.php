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
        $resultado = DB::table('calles')
        ->join('comunas','calles.id_comuna','=','comunas.id')
        ->join('provincias','comunas.id_provincia','=','provincias.id')
        ->join('regions','provincias.id_region','=','regions.id')
        ->select('calles.id as id_calle','calles.nombre_calle','comunas.id as id_comuna','comunas.nombre_comuna','provincias.id as id_provincia','provincias.nombre_provincia','regions.id as id_region','regions.nombre_region')                
        ->get();
        return $resultado;
    }
     
    public function store(Request $request)
    {
        $calle = new Calles();
        $calle->nombre_calle = $request->nombre_calle;    
        $calle->id_comuna = $request->id_comuna;         
        $calle->save();                
    }   

    public function update(Request $request)
    {
        $calle = Calles::findOrFail($request->id);
        $calle->nombre_calle = $request->nombre_calle; 
        $calle->id_comuna = $request->id_comuna;            
        $calle->save();                
    }   

    public function listarCalle($id){
        $resultado = DB::table('calles')
        ->join('comunas','calles.id_comuna','=','comunas.id')
        ->join('provincias','comunas.id_provincia','=','provincias.id')
        ->join('regions','provincias.id_region','=','regions.id')
        ->select('calles.id as id_calle','calles.nombre_calle','comunas.id as id_comuna','comunas.nombre_comuna','provincias.id as id_provincia','provincias.nombre_provincia','regions.id as id_region','regions.nombre_region')        
        ->where('calles.id','=',$id)
        ->get();
        return $resultado;
    }


    public function destroy(Request $request)
    {
        
        $calle = DB::table('calles')
        ->delete($request->id);
        return $calle;

    }
}
