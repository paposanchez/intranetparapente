@extends('layouts.paratheme.index')
@section('title', 'Streaming del Dia')

@section('content')
<div class="card">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  

  <div class="h-20 flex flex-wrap content-start">
    <button class="bg-blue-600 text-white px-4 py-2 border rounded-md hover:bg-gray-700 hover:border-indigo-500">Crear Servicio</button>
    <button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-gray-700 hover:border-indigo-500">Crear Servicio</button>
    <button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-gray-700 hover:border-indigo-500">Crear Servicio</button>

</div>
    <div class="w-full p-4">
      <div class="relative"> <input type="text" class="w-full h-12 rounded focus:outline-none px-3 focus:shadow-md" placeholder="Search..."> <i class="fa fa-search absolute right-3 top-4 text-gray-300"></i> </div>
      <ul>@foreach ($stream as $lista2)
          <li class="flex justify-between items-center bg-white mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition">
              <div class="flex ml-2"> 
                  <div class="flex flex-col ml-2"> <span class="font-medium text-black">{{ $lista2->servicio->nombre }} {{ $lista2->servicio->apellido }}</span> <span class="text-sm text-gray-400 truncate w-40">Operador:{{$lista2->user->name}}</span> </div>
              </div>
              <div class="flex flex-col items-center"><span class="text-gray-400">sector::</span></div>
              <div class="flex flex-col items-center"> <span class="text-gray-300">{{$lista2->servicio->hora}}</span> <span class="text-gray-400">{{$lista2->servicio->parque->alias}}</span></div>
          </li>
      </ul>
      @endforeach
  </div>
</div>
</div>
 @endsection

@section('js')

@stop


