@extends('layouts.parque.index')
@section('title', 'Servicios')

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
  <table class="min-w-full table-auto">
    <thead class="justify-between">
      <tr class="bg-gray-800">
        <th class="px-16 py-2">
          <span class="text-gray-300">Fecha / Hora</span>
        </th>
        <th class="px-30 py-2">
            <span class="text-gray-300">Nombre DIfunto</span>
          </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Perfil</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Sector</span>
        </th>

        <th class="px-30 py-2">
          <span class="text-gray-300">Deudo Gestor</span>
        </th>

        <th class="px-16 py-2">
          <span class="text-gray-300">Status</span>
        </th>
      </tr>
    </thead>
    @foreach ($servi as $lista)
    <tbody class="bg-gray-200">
        
      <tr class="bg-white border-4 border-gray-200">
        <td class="px-16 py-2 flex flex-row items-center">
            {{ $lista->fecha }} {{ $lista->hora }}
        </td>
        <td>
          <span class="text-center ml-2 font-semibold">{{ $lista->difunto }}</span>
        </td>
        <td class="px-16 py-2">
          <a href="{{ route('servicios.show', $lista->id) }}"><button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
            Servicio
          </button></a>
        </td>
        <td class="px-16 py-2">
          <span>05/06/2020</span>
        </td>
        <td class="px-30 py-3">
          <span>{{$lista->deudogestor}}</span>
        </td>

        <td class="px-16 py-2">
          <span class="text-green-500">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="w-5 h5 "
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="#2c3e50"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" />
              <path d="M5 12l5 5l10 -10" />
            </svg>
          </span>
        </td>
      </tr>
      
      
      
    </tbody>
    @endforeach
  </table>
</div>

<div x-show="show" tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed">
    <div  @click.away="show = false" class="z-50 relative p-3 mx-auto my-0 max-w-full" style="width: 600px;">
        <div class="bg-white rounded shadow-lg border flex flex-col overflow-hidden">
            <button @click={show=false} class="fill-current h-6 w-6 absolute right-0 top-0 m-6 font-3xl font-bold">&times;</button>
            <div class="px-6 py-3 text-xl border-b font-bold">Title of the modal</div>
            <div class="p-6 flex-grow">
                <p>You are watching this text in tailwind css model with alpine JS.</p>
            </div>
            <div class="px-6 py-3 border-t">
                <div class="flex justify-end">
                    <button @click={show=false} type="button" class="bg-gray-700 text-gray-100 rounded px-4 py-2 mr-1">Close</Button>
                    <button type="button" class="bg-blue-600 text-gray-200 rounded px-4 py-2">Saves Changes</Button>
                </div>
            </div>
        </div>
    </div>
    <div class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed bg-black opacity-50"></div>
</div>
</div>
@endsection

