<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use App\Models\Streaming;
use Illuminate\Http\Request;
use App\Models\User;

class StreamingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = Servicios::where('streaming', 1)->get();
        $streaming = Streaming::all();
        return view('streaming.index', compact('streaming','servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $User = User::whereHas("roles", function($q){ $q->where("name", "camara"); })->get(); 
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
        $streaming  = new Streaming();
        $streaming->servicio_id  = $request->servicio;
        $streaming->user_id      = $request->operador;
        $streaming->save();
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
}
