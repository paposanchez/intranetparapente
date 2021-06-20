<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Models\Streaming;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Carbon;

class StreamingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('listar streaming');
        $servicios2 = DB::table('servicios')
        ->where('streaming', '=', 1)
        ->where('estado_streaming', '=', 0)
        ->orderBy('fecha','DESC')
        ->get();
       
        $streaming = Streaming::whereHas('servicio', function($q){
            $q->orderBy('hora','ASC');
            
        })->get();
        return view('streaming.index', compact('streaming','servicios2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $this->authorize('asignar streaming');
        $User      = User::whereHas("roles", function($q){ $q->where("name", "camara"); })->get(); 
        $servicios = Servicios::find($id);

        
            return view('streaming.create',compact('User','servicios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('crear streaming');
        $validatedData = $request->validate([
            'servicio'      => 'required|unique:streamings,servicio_id',
            'operador'      => 'required'
        ]);

        $streaming  = new Streaming();
        $streaming->servicio_id  = $request->servicio;
        $streaming->user_id      = $request->operador;
        $streaming->save();


        $estado_streaming = Servicios::find($request->servicio);
        $estado_streaming->estado_streaming = 1;
        $estado_streaming->save();
        return redirect('streaming');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Streaming  $streaming
     * @return \Illuminate\Http\Response
     */
    public function show(Streaming $streaming)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Streaming  $streaming
     * @return \Illuminate\Http\Response
     */
    public function edit(Streaming $streaming)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Streaming  $streaming
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Streaming $streaming)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Streaming  $streaming
     * @return \Illuminate\Http\Response
     */
    public function destroy(Streaming $streaming)
    {
        //
    }

    public function today()
    {
        $this->authorize('today streaming');
      $stream = Streaming::whereHas('servicio', function($q){
          $q->where('fecha','=', Carbon::now()->format('Y-m-d'))
          ->orderBy('hora', 'asc');
      })->get();
      return view('streaming.day', compact('stream'));
    }

    
}
