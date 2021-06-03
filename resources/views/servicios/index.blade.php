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
          <a href="#"><button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
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
@endsection

