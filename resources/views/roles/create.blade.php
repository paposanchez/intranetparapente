@extends('layouts.parque.index')

@section('title', '| Agregar Rol')

@section('content')
<nav class="bg-gray-700 shadow-lg">
    <div class="container mx-auto">
      <div class="sm:flex justify-around">
        <a href="#" class="text-white text-3xl font-bold p-3">Administracion</a>
        <ul class="text-gray-400 sm:self-center text-xl border-t sm:border-none">
          <li class="sm:inline-block">
            <a href="#" class="p-3 hover:text-white">Usuarios</a>
          </li>
          <li class="sm:inline-block">
            <a href="#" class="p-3 hover:text-white">Permisos</a>
          </li>
          <li class="sm:inline-block">
            <a href="#" class="p-3 hover:text-white"> Roles</a>
          </li>
          <li class="sm:inline-block">
            <a href="#" class="p-3 hover:text-white">Menu 4</a>
          </li>
          <li class="sm:inline-block">
            <a href="#" class="p-3 hover:text-white">Menu 5</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="grid mt-8  gap-8 grid-cols-1">
	<div class="flex flex-col ">
		<div class="bg-white shadow-md rounded-3xl p-5">
			<div class="flex flex-col sm:flex-row items-center">
				<h2 class="font-semibold text-lg mr-auto text-blue-700">Ingresar Rol</h2>
				<div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
			</div>
      <div class="mt-5">
        {{ Form::open(array('url' => 'roles')) }}
        <div class="mb-4 md:space-y-2 w-40 text-xs">
            <label class=" font-semibold text-gray-600 py-2">{{ Form::label('name', 'Name') }}</label>
            <div class="flex flex-wrap items-stretch w-full mb-4 relative">
              {{ Form::text('name', null, array('class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline')) }}
            </div>
            </div>
       
        <h5><b>Asignar Permisos</b></h5>

        <div class='mb-4 md:space-y-2 w-full text-xs'>
            @foreach ($permissions as $permission)
                {{ Form::checkbox('permissions[]',  $permission->id ) }}
                {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

            @endforeach
        </div>

        {{ Form::submit('Add', array('class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline')) }}

        {{ Form::close() }}

     </div>
  </div>
 </div>
</div>

@endsection