@extends('layouts.paratheme.index')
@section('title', '| Diacono')

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
<div id="profile" class="w-full lg:w-2/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none  bg-white ">
  <table class="min-w-full table-auto">
    <thead class="justify-between sm:rounded-lg">
      <tr class="bg-gray-800">
        <th class="px-5 py-2">
          <span class="text-gray-300">Nombre</span>
        </th>
        <th class="px-5 py-2">
            <span class="text-gray-300">Apellido</span>
          </th>
        <th class="px-5 py-2">
          <span class="text-gray-300">Contacto</span>
        </th>
        <th class="px-5 py-2">
          <span class="text-gray-300">Correo</span>
        </th>
        <th class="px-5 py-2">
          <span class="text-gray-300">Status</span>
        </th>
      </tr>
    </thead>
    @foreach ($diacono as $lista)
    <tbody class="bg-gray-200">        
      <tr class="bg-white border-2 border-gray-200 ">
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
          <div class="flex items-center">
              <div class="ml-3 w-20">
                  <p class="text-gray-900 whitespace-no-wrap">
                    {{ $lista->nombre }}
                  </p>
              </div>
          </div>
      </td>
        <td class="px-16 py-2">
          <div class="flex items-center">
            <div class="ml-3 w-15">
                <p class="text-gray-900 whitespace-no-wrap">
                  {{ $lista->apellidos }}
                </p>
            </div>
        </div>
          </td>
        <td class="px-16 py-2">
            <span>{{$lista->fono}}</span>
          </td>
        <td class="px-16 py-2">
          <span>{{$lista->correo}}</span>
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
</div>
</div>

  
@endsection
@push('scripts')
   
@endpush

