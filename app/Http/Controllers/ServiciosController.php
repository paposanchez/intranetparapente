<?php

namespace App\Http\Controllers;

use App\Models\diaconos;
use App\Models\location;
use App\Models\Mapa;
use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servi = Servicios::all();
        return view('servicios.index', compact('servi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diacono = diaconos::all();
        $parque = location::all();
        return view('servicios.create',compact('diacono', 'parque'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $servicio = new Servicios ();
        $servicio->hora          = $request->hora;
        $servicio->fecha         = $request->fecha;
        $servicio->fechanac      = $request->fechanac;
        $servicio->nombre        = $request->nombre;
        $servicio->apellido      = $request->apellido;
        $servicio->nombregestor  = $request->nombregestor;
        $servicio->fonogestor    = $request->fonogestor;
        $servicio->correogestor  = $request->correogestor;
        $servicio->establecimiento = $request->parque;
        $servicio->user_id       ="1";
        $servicio->streaming    = $request->streaming;
        $servicio->diacono      = $request->diacono;
        $servicio->estado      = "ingresado";
        $servicio->save();
        return redirect('servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios,$id)
    {
        $servicios = Servicios::find($id);
        return view('servicios.show',compact('servicios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicios $servicios, $id)
    {
        $locacion = location::all();
        $servicios = Servicios::find($id);
        return view('servicios.edit', compact('servicios', 'locacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicios $servicios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicios $servicios)
    {
        //
    }

    public function sector ( $id)
    {
     $mapa = Mapa::where('id_parque', $id)->get();

     return response()->json(array('success'=>true,
     'categorias'      =>  $mapa,
),200);
    }
        
    
}