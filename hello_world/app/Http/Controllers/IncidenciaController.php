<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidencias = Incidencia::all();
        return view('incidencias',compact('incidencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $incidencias = Incidencia::all();
        return view('incidencias_add',compact('incidencias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'tema' => 'required',
            'detalle' => 'required',
        ]);
        $nueva_incidencia = new Incidencia();
        $nueva_incidencia->email = $request->email;
        $nueva_incidencia->tema = $request->tema;
        $nueva_incidencia->detalle = $request->detalle;
        $nueva_incidencia->save();
        return back()->with('mensaje', 'Incidencia Agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function show(incidencia $incidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function edit(incidencia $incidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, incidencia $incidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\incidencia  $incidencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incidencia =Incidencia::findOrFail($id);
        $incidencia->delete();
    
        return back()->with('mensaje', 'Incidencia Eliminada');
    }
}
