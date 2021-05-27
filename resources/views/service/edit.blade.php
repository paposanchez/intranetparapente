
@extends('adminlte::page')
@section('title', 'Editar Servicio')

@section('content')
<div class="col-md-6">
  <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Editar Servicio</h3>
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
      <form method="POST" action="#" enctype="multipart/form-data">
          @csrf
          
  <div class="form-group">
      <label for="nombre">Fecha y Hora :: </label>
      <input type="datetime-local" class="form-control" id="nombre" placeholder="Fecha y Hora" name="hora" value="">
    </div>

  <div class="form-group">
    <label for="cuerpo">Camarografo</label>
    <select class="form-control" id="user" name="user">
        <option>Seleccione Empleado</option>
        @foreach($users as $category)
        <option value="{{ $category->id}}">{{$category->name}}</option>
        <option value="{{$category->id}}" {{$service->user_id==$category->id ? 'selected' : ''}}>{{$category->name}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="cuerpo">Parque</label>
    <select class="form-control" id="parque" name="park">
        <option>Selecciones Parque</option>
        @foreach($park as $select)
        <option value="{{$select->id}}" {{$service->park==$select
        ->id ? 'selected' : ''}}>{{$select->name}}</option>
        @endforeach
    </select>
    <div class="form-group">
      <label for="cuerpo">Fallecido</label>
      <input type="text" class="form-control" id="ubicacion"  placeholder="Ingresa Nombre Difunto" name="difunto" value="{{ $service->difunto}}">
  </div>
    <div class="form-group">
      <label for="cuerpo">Ubicacion</label>
      <input type="text" class="form-control" id="ubicacion"  placeholder="Ingresa Ubicacion" name="ubicacion" value="{{ $service->ubicacion}}">
  </div>
  <div class="form-group">
    <label for="cuerpo">Sector</label>
    <input type="text" class="form-control" id="link"  placeholder="Ingresa Sector" name="sector" value="{{ $service->sector}}">
  </div>
  <div class="form-group">
    <label for="cuerpo">link</label>
    <input type="text" class="form-control" id="link"  placeholder="Ingresa Link" name="link" value="{{ $service->link}}">
  </div>
  <div class="form-group">
    <label for="cuerpo">Deudo Gestor</label>
    <input type="text" class="form-control" id="link"  placeholder="Ingresa Nombre Deudo Gestor" name="gestor" value="{{ $service->deudogestor}}">
  </div>
  </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
  </form>
  </div>
  </div>
  </div>


@endsection
