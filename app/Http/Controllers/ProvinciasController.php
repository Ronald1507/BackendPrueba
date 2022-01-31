<?php

namespace App\Http\Controllers;

use App\Models\Provincias;
use App\Models\Regions;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class ProvinciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincia = Provincias::all();
        return $provincia;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provincia = new Provincias();
        $provincia->nombre_provincia = $request->nombre_provincia;
        $provincia->id_region = $request->id_region;

        $provincia->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function showProvinciasPorRegion($id)
    {
        $provincias_region = Provincias::where('id_region', $id)
        ->select("provincias.id","provincias.nombre_provincia","provincias.id_region")
        ->get();
        return $provincias_region;
    }

    public function show($id)
    {
        $provincia = Provincias::findOrFail($id);
        return $provincia;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $provincia = Provincias::findOrFail($request->id);
        $provincia->nombre_provincia = $request->nombre_provincia;
        $provincia->id_region = $request->id_region;
        $provincia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $provincia = Provincias::destroy($request->id);
        return $provincia;
    }
}
