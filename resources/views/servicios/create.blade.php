
@extends('adminlte::page')
@section('title', 'Crear Diacono')

@section('content')
<div class="col-md-8">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Crear Servicios</h3>
    </div>
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
    <form method="POST" action="{{ route('servicios.store') }}" enctype="multipart/form-data">
        @csrf
        
<div class="col-sm-4">
    <label for="nombre">Fecha</label>
    <input type="date" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="fecha">
  </div>
  <div class="col-sm-4">
    <label for="apellidos">hora</label>
    <input type="time" class="form-control" id="apellidos"  placeholder="Ingresa Apellidos" name="hora">
</div>
<div class="form-group col-sm-6">
  <label for="apellidos">difunto</label>
  <input type="text" class="form-control" id="fonos"  placeholder="Ingrese nombre del difunto" name="difunto">
</div>
<div class="form-group">
  <label for="apellidos">parque</label>
  
</div>
<div class="form-group col-sm-6">
  <label for="sector">sector</label>
  
</div>
<div class="form-group col-sm-6">
  <label for="sector">Diacono</label>
  
</div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection
