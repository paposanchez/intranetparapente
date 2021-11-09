<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\location;
use App\Models\Mapa;
Use DB;

class VariosController extends Controller
{
   
    public function index(){
        $categorias = Location::all();
        $doctors = DB::table('mapas')->where('id_parque', '=', 1)->get();
        return view("varios.index",compact("categorias","doctors"));

    }

    public function subcategorias(Request $request){
        if(isset($request->texto)){
            $subcategorias = Mapa::where('id_parque',$request->texto)->get();
            return response()->json(
                [
                    'lista' => $subcategorias,
                    'success' => true
                ]
                );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
                );

        }

    }
    public function buscarLocalidad()
{
    $q       = trim(\request('q'));
    $results = location::where('name', 'LIKE', '%' . $q . '%')->take(15)->get();

    return Response()->json($results);
}
   
    
}
