@extends('layouts.paratheme.index')
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
</div>
<div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 rounded-tl-lg rounded-tr-lg">
  <div class="sm:flex items-center justify-between">
      <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Servicios</p>
      @can('crear diacono') <div>
        <a href="{{route('servicios.create')}}">
          <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
              <p class="text-sm font-medium leading-none text-white">Crear Servicio</p>
          </button></a>
      </div>@endcan
  </div>
</div> 
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
          <span class="text-gray-300">Acciones</span>
        </th>
      </tr>
    </thead>
    @foreach ($servi as $lista)
    <tbody class="bg-gray-200">
        
      <tr class="bg-white border-4 border-gray-200">
        <td class="px-16 py-2 flex flex-row items-center">
             {{ Carbon\Carbon::parse($lista->fecha)->format('d-m-Y') }}::{{ Carbon\Carbon::parse($lista->hora)->format('H:m') }}
        </td>
        <td>
          <span class="text-center ml-2 font-semibold">{{ $lista->nombre }} {{ $lista->apellido }}</span>
        </td>
        <td class="px-16 py-2">
          <a href="{{ route('servicios.show', $lista->id) }}"><button class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-gray-700 hover:border-indigo-500 hover:text-white ">
            Mostrar
          </button></a>
        </td>
        <td class="px-16 py-2">
          <span>05/06/2020</span>
        </td>
        <td class="px-30 py-3">
          <span>{{$lista->nombregestor}}</span>
        </td>

        <td class="py-3 px-6 text-center">
            <div class="flex item-center justify-center">
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 invisible">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <a href="{{ route('servicios.edit', $lista->id) }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg></a>
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
  <div class="px-4 py-4 bg-gray-100 rounded-tl-lg rounded-tr-lg">
    <div class="sm:flex items-center justify-between">
        
        {{ $servi->links() }}
        </div>
    </div>
</div>

</div> 
@endsection

@section('js')

@stop