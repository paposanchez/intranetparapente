<?php

namespace App\Http\Controllers;

use App\Models\location as ModelsLocation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serv = Service::all();
        return view('service.index', compact('serv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $User = User::role('admin')->get(); 
        $park = ModelsLocation::all();
        $users = User::all();
        return view('service.create',compact('park','users', 'User'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = new Service ();
        $servicio->hora          = $request->hora;
        $servicio->ubicacion     = $request->ubicacion;
        $servicio->deudogestor   = $request->gestor;
        $servicio->park          = $request->park;
        $servicio->link          = $request->link;
        $servicio->user_id       = $request->user;
        $servicio->sector        = $request->sector;
        $servicio->difunto       = $request->fallecido;
        $servicio->save();

        return redirect('servicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service,$id)
    {
        $this->authorize('edit service');
        $users = User::all();
        $service = Service::find($id);
        $park = ModelsLocation::all();
        return view('service.edit', compact('service','users','park'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }

    public function porusuario( User $user)
    {
        $this->authorize('view porusuario');
        $ticket = Service::where('user_id', Auth::user()->id)->paginate(10);
        return view('service.user', compact('ticket'));
    }

    public function marcarsi(Request $request,$id)
    {
        $marcar = Service::find($id);
        $marcar->estado = "Realizado";
        $marcar->save();
        return redirect('porusuario');

    }
}