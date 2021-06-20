
@extends('layouts.paratheme.index')
@section('title', 'Asignar Streaming')

@section('content')
  <div class="bg-white p-10 rounded-lg shadow m:w-3/4 lg:w-1/2 mx-auto">
    
    <form action="{{ route('streaming.store', $servicios->id ) }}" method="POST">
      @csrf
      <div class="w-full p-4 border rounded-lg border-dashed py-5 border-3 ">
      <div class="relative"> <p class="text-gray-400 font-semibold mt-2 text-2xl py-2">Asignar Streaming</p></div>
    <ul>
      <li class="flex justify-between items-center bg-white mt-2 p-2 hover:shadow-lg rounded cursor-pointer transition">
        <div class="flex ml-2"> 
            <div class="flex flex-col ml-2"> <span class="font-medium text-black">{{ $servicios->nombre }} {{ $servicios->apellido }}</span> <span class="text-sm text-gray-400 truncate w-40">Fecha: {{ Carbon\Carbon::parse($servicios->fecha)->format('d-m-y ') }}</span> </div>
        </div>
        <div class="flex flex-col items-center"><span class="text-gray-400">sector::</span></div>
        <div class="flex flex-col items-center"> <span class="text-gray-300">{{ Carbon\Carbon::parse($servicios->hora)->format('h:i ') }}</span> <span class="text-gray-400">{{$servicios->parque->alias}}</span></div>
    </li>
    </ul>
    </div>
      <div class="mb-3 md:space-y-2 w-full text-xs">
        <label class="font-semibold text-gray-600 py-2">Operador <abbr title="required">*</abbr></label>
        <select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " id="select-protect" name="operador">
          <option>Seleccione Operador</option>
          @foreach($User as $category)
          <option value="{{ $category->id}}">{{$category->name}}</option>
          @endforeach
      </select>
        <p class="text-red text-xs hidden">Please fill out this field.</p>
      </div>
      <input type="" class="form-control invisible" name="servicio" value="{{ $servicios->id }}">
      <p class="text-red-400 text-sm mt-2 py-2">* todos los campos son obligatorios</p>
      <button class="block w-full bg-blue-400 p-4 text-white font-bold rounded-lg shadow hover:shadow-lg">Submit</button>
    </form>
  </div>
</div>
<div class="mb-4">
    @if ($errors->any())
    <div class="bg-red-400">
        <strong>Tenemos Un Problema!</strong> Revisa Los siguentes campos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@endsection