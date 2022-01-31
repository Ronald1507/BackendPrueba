<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunas;

class ComunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comuna = Comunas::all();
        return $comuna;
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
        $comuna = new Comunas();
        $comuna->nombre_comuna = $request->nombre_comuna;
        $comuna->id_provincia = $request->id_provincia;
        $comuna->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comuna = Comunas::findOrFail($id);
        return $comuna; 
    }

    public function showComunasPorProvincia($id)
    {
        $comunas_provincia = Comunas::where('id_provincia', $id)->get();
        return $comunas_provincia;
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
        $comuna = Comunas::findOrFail($request->id);
        $comuna->nombre_comuna = $request->nombre_comuna;
        $comuna->id_provincia = $request->id_provincia;
        $comuna->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $comuna = Comunas::destroy($request->id);
        return $comuna;
    }
}
