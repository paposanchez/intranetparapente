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
      </tr>
  </thead>
  @foreach($diacono as $product)
      <tr class="bg-white border-2 border-gray-200">
          <td class="border px-6 py-4">{{$product->nombre}}</td>
          <td class="border px-6 py-4">{{$product->apellidos}}</td>
          <td class="border px-6 py-4">{{$product->correo}} - fono: {{$product->fono}}</td>
          <td class="border px-6 py-4">{{$product->status ? 'Active' : 'Not Active'}}</td>
      </tr>
  @endforeach
</table>


@endsection
@push('scripts')
   
@endpush

