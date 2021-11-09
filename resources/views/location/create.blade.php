
@extends('layouts.paratheme.index')
@section('title', 'Crear locacion')

@section('content')


<div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24  mb-24">
  <form method="POST" action="{{ route('location.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
            Nombre
          </label>
          <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="nombre" name="name" type="text" placeholder="Nombre">
          <div>
            <span class="text-red-500 text-xs italic">
              Please fill out this field.
            </span>
          </div>
        </div>
        <div class="md:w-1/2 px-3">
          <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
            Alias
          </label>
          <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="alias" name="alias" type="text" placeholder="Alias">
        </div>
      </div>
      <div class="-mx-3 md:flex mt-2">
        <div class="md:w-full px-3">
          <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
            Crear
          </button>
        </div>
      </div>
    </div>
  </form>     
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
