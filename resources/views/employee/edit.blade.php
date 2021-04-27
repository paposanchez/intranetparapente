
@extends('adminlte::page')
@section('title', 'Crear Cuerpo')

@section('content')
<div class="col-md-6">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Crear Location</h3>
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
    <form method="POST" action="{{ route('employee.update', $employee->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

<div class="form-group">
  <label for="nombre">Nombre</label>
  <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="name" value="{{$employee->name}}">
</div>
<div class="form-group">
  <label for="cuerpo">Apellidos</label>
  <input type="text" class="form-control" id="lastname"  placeholder="Ingresa Apellidos" name="lastname" value="{{$employee->lastname}}">
</div>
<div class="form-group">
<label for="cuerpo">Rut</label>
<input type="text" class="form-control" id="rut"  placeholder="Ingresa Rut" name="rut" value="{{$employee->rut}}">
</div>
<div class="form-group">
<label for="cuerpo">E-mail</label>
<input type="text" class="form-control" id="email"  placeholder="Ingresa E-mail" name="email" value="{{$employee->email}}">
</div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection
