
@extends('adminlte::page')
@section('title', 'Crear Empleado')

@section('content')
<div class="col-md-6">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Employee</h3>
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
    <form method="POST" action="{{ route('employee.store') }}" enctype="multipart/form-data">
        @csrf
        
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="name">
  </div>
  <div class="form-group">
    <label for="cuerpo">Apellidos</label>
    <input type="text" class="form-control" id="lastname"  placeholder="Ingresa Apellidos" name="lastname">
</div>
<div class="form-group">
  <label for="cuerpo">Rut</label>
  <input type="text" class="form-control" id="rut"  placeholder="Ingresa Rut" name="rut">
</div>
<div class="form-group">
  <label for="cuerpo">E-mail</label>
  <input type="text" class="form-control" id="email"  placeholder="Ingresa E-mail" name="email">
</div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection
