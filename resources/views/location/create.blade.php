
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
    <form method="POST" action="{{ route('location.store') }}" enctype="multipart/form-data">
        @csrf
        
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="name">
  </div>
  <div class="form-group">
    <label for="cuerpo">Alias</label>
    <input type="text" class="form-control" id="fabricacion"  placeholder="Ingresa Abreviacion" name="alias">
</div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection
