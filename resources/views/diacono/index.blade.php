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

</div>
<div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100 rounded-tl-lg rounded-tr-lg">
  <div class="sm:flex items-center justify-between">
      <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Diaconos</p>
      @can('crear diacono') <div>
        <a href="{{route('diacono.create')}}">
          <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
              <p class="text-sm font-medium leading-none text-white">Crear Diacono</p>
          </button></a>
      </div>@endcan
  </div>
</div>
<table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
  <thead class="bg-gray-800">
      <tr class="text-center font-bold ">
          <td class="border px-6 py-4 text-white">Nombre</td>
          <td class="border px-6 py-4 text-white">Apellido</td>
          <td class="border px-6 py-4 text-white">Contacto</td>
          <td class="border px-6 py-4 text-white">Estado</td>
          <td class="border px-6 py-4 text-white">Acciones</td>
      </tr>
  </thead>
  @foreach($diacono as $product)
      <tr class="bg-white border-2 border-gray-200">
          <td class="border px-6 py-4">{{$product->nombre}}</td>
          <td class="border px-6 py-4">{{$product->apellidos}}</td>
          <td class="border px-6 py-4">{{$product->correo}} - fono: {{$product->fono}}</td>
          <td class="border px-6 py-4">{{$product->status ? 'Active' : 'Not Active'}}</td>
          <td class="py-3 px-6 text-center">
            <div class="flex item-center justify-center">
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110 invisible">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                    <a href="{{ route('diacono.edit', $product->id) }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
      </tr>
  @endforeach
</table>


@endsection
@push('scripts')
   
@endpush

