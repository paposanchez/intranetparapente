
@extends('adminlte::page')
@section('title', 'Crear Diacono')

@section('content')
<div class="col-md-6">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Crear Diacono</h3>
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
    <form method="POST" action="{{ route('diacono.store') }}" enctype="multipart/form-data">
        @csrf
        
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="nombre">
  </div>
  <div class="form-group">
    <label for="apellidos">Apellidos</label>
    <input type="text" class="form-control" id="apellidos"  placeholder="Ingresa Apellidos" name="apellidos">
</div>
<div class="form-group">
  <label for="apellidos">Fono</label>
  <input type="text" class="form-control" id="fonos"  placeholder="Ingresa Telefono o Celular" name="fono">
</div>
<div class="form-group">
  <label for="apellidos">Correo</label>
  <input type="email" class="form-control" id="email"  placeholder="Ingresa Email@tudominio.com" name="correo">
</div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection
