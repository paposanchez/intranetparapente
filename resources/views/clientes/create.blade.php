
@extends('layouts.paratheme.index')
@section('title', 'Crear Servicio')
@section('content')

<div class="grid mt-8  gap-8 grid-cols-1">
	<div class="flex flex-col ">
		<div class="bg-white shadow-md rounded-3xl p-5">
			<div class="flex flex-col sm:flex-row items-center">
				<h2 class="font-semibold text-lg mr-auto text-blue-700">Ingresar Cliente</h2>
				<div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
			</div>
      <div class="mt-5">
        <form method="POST" action="{{ route('servicios.store') }}" enctype="multipart/form-data">
          @csrf 
        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Nombre <abbr title="required">*</abbr></label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="txt" name="nombre" value="ingrese nombre">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
          <div class="mb-3 md:space-y-2 w-full text-xs">
            <label class="font-semibold text-gray-600 py-2">Razón Social <abbr title="required">*</abbr></label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="txt" name="razon" id="integration_shop_name">
            <p class="text-red text-xs hidden">Please fill out this field.</p>
          </div>
        </div> 
        <div class="mb-3 md:space-y-2 w-full text-xs">
          <label class="font-semibold text-gray-600 py-2">Rut <abbr title="required">*</abbr></label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4" required="required" type="txt" name="rut" id="integration_shop_name">
          <p class="text-red text-xs hidden">Please fill out this field.</p>
        </div>
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



@endsection