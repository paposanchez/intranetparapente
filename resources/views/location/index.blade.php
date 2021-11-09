@extends('layouts.paratheme.index')

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

<div class="md:px-40 py-5 w-full">
  <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 rounded-tl-lg rounded-tr-lg">
    <div class="sm:flex items-center justify-between">
        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Establecimiento</p>
        @can('crear diacono') <div>
          <a href="{{route('location.create')}}">
            <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                <p class="text-sm font-medium leading-none text-white">Crear Establecimiento</p>
            </button></a>
        </div>@endcan
    </div>
  </div>
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
      <table class="min-w-full bg-white">
        <thead class="bg-gray-800 text-white">
          <tr>
            <th class="w-4 text-center py-3 px-4 uppercase font-semibold text-sm">Nombre</th>
            <th class="w-4 text-center py-3 px-4 uppercase font-semibold text-sm">Alias</th>
            <th class="w-4 text-center py-3 px-4 uppercase font-semibold text-sm"></td>
          </tr>
        </thead>
      <tbody class="text-gray-700">
        @foreach ($locate as $cuerpo)
        <tr>
          <td class="w-4 text-center py-3 px-4">{{ $cuerpo->name }}</td>
          <td class="w-4 text-center py-3 px-4">{{ $cuerpo->alias }}</td>
          <td class="w-1/3 text-center py-3 px-4">
            <div class=" w-1/3 flex item-center justify-center">
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 invisible">
                  @can('mostrar locales')
                   <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg></a>@endcan
                </div>
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    @can('editar locales')
                    <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg></a>@endcan
                </div>
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    @can('borrar locales')
                      
                    <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    </a>@endcan
                </div>
            </div>
        </td>
        </tr>
      </tbody>
      @endforeach
      </table>
    </div>
  </div>
  
@endsection
@push('scripts')
@endpush

