
@extends('layouts.paratheme.index')
@section('title', 'Editar Establecimiento')

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
        <div class="grid mt-8  gap-8 grid-cols-1">
          <div class="flex flex-col ">
            <div class="bg-white shadow-md rounded-3xl p-5">
              <div class="flex flex-col sm:flex-row items-center">
                <h2 class="font-semibold text-lg mr-auto text-blue-700">Ingresar Servicio</h2>
                <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
              </div>
              <div class="mt-5">
                <form method="POST" action="{{ route('servicios.update', $servicios->id ) }}" enctype="multipart/form-data">
                  @csrf @method('PUT')
                <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                  <div class="mb-3 md:space-y-2 w-full text-xs">
                    <label class="font-semibold text-gray-600 py-2">Fecha <abbr title="required">*</abbr></label>
                    <input placeholder="Company Name" value="{{$servicios->fecha}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="date" name="fecha" id="integration_shop_name">
                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                  </div>
                  <div class="mb-3 md:space-y-2 w-full text-xs">
                    <label class="font-semibold text-gray-600 py-2">Hora <abbr title="required">*</abbr></label>
                    <input placeholder="hora" value="{{$servicios->hora}}"class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="time" name="hora" id="integration_shop_name">
                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                  </div>
                </div> 
                <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                  <div class="mb-3 md:space-y-2 w-full text-xs">
                    <label class="font-semibold text-gray-600 py-2">Nombre <abbr title="required">*</abbr></label>
                    <input value="{{$servicios->nombre}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="nombre">
                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                  </div>
                  <div class="mb-3 md:space-y-2 w-full text-xs">
                    <label class="font-semibold text-gray-600 py-2">Apellido <abbr title="required">*</abbr></label>
                    <input value="{{$servicios->apellido}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="apellido">
                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                  </div>
                </div>
                <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                  <div class="mb-3 md:space-y-2 w-full text-xs">
                    <label class="font-semibold text-gray-600 py-2">Parque <abbr title="required">*</abbr></label>
                    <select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " id="select-protect" name="parque">
                      <option>Seleccione Parque</option>
                      @foreach($locacion as $category)
                      <option value="{{ $category->id}}">{{$category->name}}</option>
                      <option value="{{$category->id}}" {{$servicios->establecimiento==$category->id ? 'selected' : ''}}>{{$category->name}}</option>
                      @endforeach
                  </select>
                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                  </div>
                  <div class="mb-3 md:space-y-2 w-full text-xs">
                    <label class="font-semibold text-gray-600 py-2">Sector <abbr title="required">*</abbr></label>
                    
                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                  </div>
                </div> 
                <div class="flex flex-col sm:flex-row items-center">
                  <h2 class="font-semibold text-lg mr-auto text-blue-700">Datos Deudo Gestor</h2>
                  <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                </div>
                <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                  <div class="mb-3 md:space-y-2 w-full text-xs">
                    <label class="font-semibold text-gray-600 py-2">Nombre Deudo Gestor <abbr title="required">*</abbr></label>
                    <input value="{{$servicios->nombregestor}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="nombregestor" id="integration_shop_name">
                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                  </div>
                  <div class="mb-3 md:space-y-2 w-full text-xs">
                    <label class="font-semibold text-gray-600 py-2">Contacto Deudo <abbr title="required">*</abbr></label>
                    <input value="{{$servicios->fonogestor}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="fonogestor" id="integration_shop_name">
                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                  </div>
                  <div class="mb-3 md:space-y-2 w-full text-xs">
                    <label class="font-semibold text-gray-600 py-2">Correo Deudo <abbr title="required">*</abbr></label>
                    <input value="{{$servicios->correogestor}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="correogestor" id="integration_shop_name">
                    <p class="text-red text-xs hidden">Please fill out this field.</p>
                  </div>
                </div> 
                <div class="flex flex-col sm:flex-row items-center">
                  <h2 class="font-semibold text-lg mr-auto text-blue-700">Servicios Adicionales</h2>
                  <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                </div>
                <div class="mb-3 md:space-y-2 w-full text-xs">
                  <label class="inline-flex items-center mt-3 space-x-4">
                    @if($servicios->streaming == "true")
                                            <label>
                                                <input type="checkbox" name="streaming" class="form-checkbox h-5 w-5 text-gray-600" value="{{ $servicios->streaming }}" checked><span class="ml-2 text-gray-700">streaming</span>
                                                    
                                            </label>
                                            @else
                                            <label>
                                                <input type="checkbox" name="streaming" value="1" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700"> streaming</span>
                                                    
                                            </label>
                                            @endif
                </label>
                  <p class="text-red text-xs hidden">Please fill out this field.</p>
                  <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                </div>
                <div class="flex flex-col sm:flex-row items-center ">
                <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Ingresar</button>
                </div>
              </form>
              </div> 


@endsection
