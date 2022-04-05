@extends('layouts.paratheme.index')
@section('title', 'Crear Cuerpo')

@section('content')
<div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24  mb-24">
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
    <form method="POST" action="{{ route('location.update', $locate->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="name" value="{{$locate->name}}">
  </div>
  <div class="form-group">
    <label for="cuerpo">Alias</label>
    <input type="text" class="form-control" id="fabricacion"  placeholder="Ingresa Abreviacion" name="alias" value="{{$locate->alias}}">
</div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection
