
@extends('layouts.paratheme.index')
@section('title', 'Crear Servicio')
@section('content')

<div class="grid mt-8  gap-8 grid-cols-1">
	<div class="flex flex-col ">
		<div class="bg-white shadow-md rounded-3xl p-5">
			<div class="flex flex-col sm:flex-row items-center">
				<h2 class="font-semibold text-lg mr-auto text-blue-700">Ingresar Servicio</h2>
				<div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
			</div>
      <div class="mt-5">
        <form method="POST" action="{{ route('servicios.store') }}" enctype="multipart/form-data">
          @csrf 
        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Fecha <abbr title="required">*</abbr></label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="date" name="fecha" value="<?php echo date("Y-m-d");?>">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Hora <abbr title="required">*</abbr></label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="time" name="hora" id="integration_shop_name">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
        </div> 
        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Nombre <abbr title="required">*</abbr></label>
            <input placeholder="Nombre" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="nombre"  value="{{old('nombre')}}">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Apellido <abbr title="required">*</abbr></label>
            <input placeholder="hora" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="apellido"  value="{{old('apellido')}}">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Fecha Nacimiento <abbr title="required">*</abbr></label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="date" name="fechanac"  value="{{old('fechanac')}}">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
        </div>
        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Parque <abbr title="required">*</abbr></label>
            <select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " id="_categoria" name="parque">
              <option>Seleccione Parque</option>
              @foreach($parque as $category)
              <option value="{{ $category->id}}">{{$category->name}}</option>
              @endforeach
          </select>
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Sector <abbr title="required">*</abbr></label>
            <select name="" id="_subcategoria" class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "></select>
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Sector <abbr title="required">*</abbr></label>
            <select class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full " id="select-protect" name="diacono">
              <option>Seleccione Diacono</option>
              @foreach($diacono as $category)
              <option value="{{ $category->id}}">{{$category->nombre}} {{$category->apellidos}}</option>
              @endforeach
          </select>
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
            <input placeholder="Ingrese Nombre Deudo" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="nombregestor"  value="{{old('nombregestor')}}">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Contacto Deudo <abbr title="required">*</abbr></label>
            <input placeholder="Ingrese numero de contacto" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="contactogestor"  value="{{old('contactogestor')}}">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Correo Deudo <abbr title="required">*</abbr></label>
            <input placeholder="Ingrese email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="correogestor" value="{{old('correogestor')}}">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
        </div> 
        <div class="mb-3 md:space-y-2 w-full text-xs">
          <label class="font-semibold text-gray-600 py-2">Link Streaming <abbr title="required">*</abbr></label>
          <input placeholder="Ingrese email" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="text" name="link" value="{{old('link')}}">
          <p class="text-red text-xs hidden">Please fill out this field.</p>
        </div>
        <div class="flex flex-col sm:flex-row items-center">
          <h2 class="font-semibold text-lg mr-auto text-blue-700">Servicios Adicionales</h2>
          <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
        </div>
        <div class="mb-3 md:space-y-2 w-full text-xs">
          <label class="inline-flex items-center mt-3 space-x-4">
            <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" name ="streaming" value="1" ><span class="ml-2 text-gray-700">Streaming</span>
        </label>
          <p class="text-red text-xs hidden">Please fill out this field.</p>
          <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
        </div>
        <div class="flex flex-col sm:flex-row items-center ">
        <button class="mb-2 md:mb-0 bg-green-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-green-500">Ingresar</button>
        </div>
      </form>
      </div> <!-- cierra div formularios -->
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
    
            
@endsection

@section('scripts')
<script>
const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
  document.getElementById('_categoria').addEventListener('change',(e)=>{
      fetch('../subcategorias',{
          method : 'POST',
          body: JSON.stringify({texto : e.target.value}),
          headers:{
              'Content-Type': 'application/json',
              "X-CSRF-Token": csrfToken
          }
      }).then(response =>{
          return response.json()
      }).then( data =>{
          var opciones ="<option value=''>Seleccione sector</option>";
          for (let i in data.lista) {
             opciones+= '<option value="'+data.lista[i].id+'">'+data.lista[i].sector+'</option>';
          }
          document.getElementById("_subcategoria").innerHTML = opciones;
      }).catch(error =>console.error(error));
  })
</script>


@endsection