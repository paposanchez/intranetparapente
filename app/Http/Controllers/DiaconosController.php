<?php

namespace App\Http\Controllers;

use App\Models\diaconos;
use Illuminate\Http\Request;

class DiaconosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $this->authorize('listar diacono');
        $diacono = diaconos::latest()->paginate(5);
        return view('diacono.index', compact('diacono'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('crear diacono');
        return view('diacono.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('crear diacono');
        $validatedData = $request->validate([
            'nombre'         => 'required|max:255',
            'apellidos'      => 'required',
            'fono'           => 'required|string|max:12|min:9',
            'correo'          => 'required|email|max:255'
        ]);
        $diacono = new diaconos ();
        $diacono->nombre        = $request->nombre;
        $diacono->apellidos     = $request->apellidos;
        $diacono->fono          = $request->fono;
        $diacono->correo        = $request->correo;
        $diacono->save();

        return redirect('diacono');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diaconos  $diaconos
     * @return \Illuminate\Http\Response
     */
    public function show(diaconos $diaconos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diaconos  $diaconos
     * @return \Illuminate\Http\Response
     */
    public function edit(diaconos $diaconos, $id)
    {
        $this->authorize('edit diacono');
        $diacono = diaconos::find($id);
        return view('diacono.edit', compact('diacono'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\diaconos  $diaconos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, diaconos $diaconos, $id)
    {
        $this->authorize('update diacono');
        $validatedData = $request->validate([
            'nombre'         => 'required|max:255',
            'apellidos'      => 'required',
            'fono'           => 'required|string|max:12|min:9',
            'correo'          => 'required|email|max:255'
        ]);
        $diacono = diaconos::find($id);
        $diacono->nombre        = $request->nombre;
        $diacono->apellidos     = $request->apellidos;
        $diacono->fono          = $request->fono;
        $diacono->correo        = $request->correo;
        $diacono->save();
        return redirect('diacono');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diaconos  $diaconos
     * @return \Illuminate\Http\Response
     */
    public function destroy(diaconos $diaconos)
    {
        //
    }
}
