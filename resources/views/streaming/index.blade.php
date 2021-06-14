@extends('layouts.paratheme.index')
@section('title', 'Streaming')

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
  <table class="min-w-full table-auto">
    <thead class="justify-between">
      <tr class="bg-gray-800">
        
        <th class="px-16 py-2"><span class="text-gray-300">Sin Asignar</span></th> </tr>
      <tr class="bg-gray-800">
        <th class="px-16 py-2">
          <span class="text-gray-300">Fecha</span>
        </th>
        <th class="px-30 py-2">
            <span class="text-gray-300">Nombre DIfunto</span>
          </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Perfil</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Hora</span>
        </th>

        <th class="px-30 py-2">
          <span class="text-gray-300">Asignado</span>
        </th>

        <th class="px-16 py-2">
          <span class="text-gray-300">Acciones</span>
        </th>
      </tr>
    </thead>
    @foreach ($servicios2 as $lista)
    <tbody class="bg-gray-200">
        
      <tr class="bg-white border-4 border-gray-200">
        <td class="px-16 py-2 flex flex-row items-center">
             <p class="text-red-400 font-semibold mt-2 text-1xl py-2"> {{ Carbon\Carbon::parse($lista->fecha)->format('d-m-y ') }}</p>   
        </td>
        <td>
          <span class="text-center ml-2 font-semibold">{{ $lista->nombre }} {{ $lista->apellido }}</span>
        </td>
        <td class="px-16 py-2">
          <a href="{{ route('streaming.create', $lista->id) }}"><button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-gray-700 hover:border-indigo-500 hover:text-white ">
            Asignar
          </button></a>
        </td>
        <td class="px-16 py-2">
          <span>{{ Carbon\Carbon::parse($lista->hora)->format('h:i ') }}</span>
        </td>
        <td class="px-30 py-3">
          <span></span>
        </td>

        <td class="py-3 px-6 text-center">
            <div class="flex item-center justify-center">
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </div>
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
            </div>
        </td>
      </tr>
      
    </tbody>
    @endforeach
  </table>


  <div class="h-20 flex flex-wrap content-start">
    <button class="bg-blue-600 text-white px-4 py-2 border rounded-md hover:bg-gray-700 hover:border-indigo-500">Crear Servicio</button>
    <button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-gray-700 hover:border-indigo-500">Crear Servicio</button>
    <button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-gray-700 hover:border-indigo-500">Crear Servicio</button>

</div>
  <table class="min-w-full table-auto">
    <thead class="justify-between">
      <tr class="bg-gray-800">
        <th class="px-16 py-2">
          <span class="text-gray-300">Fecha</span>
        </th>
        <th class="px-30 py-2">
            <span class="text-gray-300">Nombre DIfunto</span>
          </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Perfil</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Hora</span>
        </th>

        <th class="px-30 py-2">
          <span class="text-gray-300">Asignado</span>
        </th>

        <th class="px-16 py-2">
          <span class="text-gray-300">Acciones</span>
        </th>
      </tr>
    </thead>
    @foreach ($streaming as $lista2)
    <tbody class="bg-gray-200">
        
      <tr class="bg-white border-4 border-gray-200">
        <td class="px-16 py-2 flex flex-row items-center">
             <p class="text-red-400 font-semibold mt-2 text-1xl py-2"> {{ Carbon\Carbon::parse($lista2->servicio->fecha)->format('d-m-y ') }}</p>   
        </td>
        <td>
          <span class="text-center ml-2 font-semibold">{{ $lista2->servicio->nombre }} {{ $lista2->servicio->apellido }}</span>
        </td>
        <td class="px-16 py-2">
          <a href="{{ route('servicios.show', $lista2->id) }}"><button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-gray-700 hover:border-indigo-500 hover:text-white ">
            Servicio
          </button></a>
        </td>
        <td class="px-16 py-2">
          <span>{{ Carbon\Carbon::parse($lista2->servicio->hora)->format('h:i ') }}</span>
        </td>
        <td class="px-30 py-3">
          <span>{{$lista2->user->name}}</span>
        </td>

        <td class="py-3 px-6 text-center">
            <div class="flex item-center justify-center">
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                </div>
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </div>
            </div>
        </td>
      </tr>
      
    </tbody>
    @endforeach
@endsection

@section('js')

@stop