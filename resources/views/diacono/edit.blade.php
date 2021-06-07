
@extends('layouts.paratheme.index')
@section('title', 'Editar Diacono')

@section('content')

<div class="card-body">
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
   
        
        


  
<div class="bg-white p-10 rounded-lg shadow m:w-3/4 lg:w-1/2 mx-auto">
  <form action="{{ route('diacono.update', $diacono->id ) }}" method="POST">
    @csrf @method('PUT')
    <p class="text-gray-400 font-semibold mt-2 text-2xl py-2">Editar Diacono</p>
    <div class="mb-4">
      <lable for="nombre" class="block mb-2 text-gray-500 font-bold">Nombre</lable>
      <input type="text" id="nombre" placeholder="Nombre"  name="nombre" class="border border-gray-300 p-3 w-full rounded shadow focus:outline-none focus:ring-2 focus:border-blue-300" required value="{{ old('nombre', $diacono->nombre)}}">
    </div>
    <div class="mb-4">
      <lable for="apellidos" class="block mb-2 text-gray-500 font-bold">Apellidos</lable>
      <input type="text" id="twitter" name="apellidos" placeholder="Apellidos"  class="border border-gray-300 p-3 w-full rounded shadow focus:outline-none focus:ring-2 focus:border-blue-300" required value="{{ old('apellidos', $diacono->apellidos)}}">
    </div>
    <div class="mb-4">
      <lable for="celular" class="block mb-2 text-gray-500 font-bold">Celular</lable>
      <input type="text" id="fono" name="fono" placeholder="Celular" class="border border-gray-300 p-3 w-full rounded shadow focus:outline-none focus:ring-2 focus:border-blue-300" required value="{{ old('celular', $diacono->fono)}}">
    </div>
    <div class="mb-4">
      <lable for="name" class="block mb-2 text-gray-500 font-bold">e-mail</lable>
      <input type="text" id="correo" name="correo" placeholder="Nombre" class="border border-gray-300 p-3 w-full rounded shadow focus:outline-none focus:ring-2 focus:border-blue-300" required value="{{ old('correo', $diacono->correo)}}">
    </div>
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
