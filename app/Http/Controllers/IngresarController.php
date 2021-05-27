<?php

namespace App\Http\Controllers;

use App\Models\location;
use App\Models\employee;
use Illuminate\Http\Request;


class IngresarController extends Controller
{
    public function index()
    {
        $select = location::all();
        return view('ingreso.index', compact('select'));
    } 


    public function ingreso (Request $request)
    {
        $validatedData = $request->validate([
            'rut'           => 'required|exists:employees,rut',
            'local'         => 'required',
            'partime'       => 'required_without_all'
        ],[
            'rut.requ'=> 'Rut no Encontrado'
        ]);

        dd($validatedData);
    }
}
