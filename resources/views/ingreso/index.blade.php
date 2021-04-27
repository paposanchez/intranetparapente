@extends('adminlte::page')
@section('title', 'Ingreso Asistencia')

@section('content')
<div class="col-md-6 ">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Crear Location</h3>
    </div>
<div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Falta LLenar algunos campos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{ route('employee.ingreso') }}" enctype="multipart/form-data">
        @csrf
<div class="form-group">
<label for="cuerpo">Rut</label>
<input type="text" class="form-control" id="rut"  placeholder="Ingresa Rut" name="rut" oninput="checkRut(this)">
</div>
<div class="form-group">
  <label for="cuerpo">Ubicacion</label>
  <select class="form-control" id="cuerpo" name="local">
      <option>Selecciones Local</option>
      @foreach($select as $local)
      <option value="{{ $local->id}}">{{$local->name}}</option>
      @endforeach
  </select>
</div>
<div class="form-group" >
  <input type="text" class="form-control" id="date" name="datetime"  disabled="disabled" value="{{Carbon\Carbon::now()->format('d-m-Y')."hora".Carbon\Carbon::now()->format('H:i')}}">
  </div>
<div class="form-group custom-switch">
  <input type="checkbox" class="custom-control-input" id="customSwitch1" name="partime">
  <label class="custom-control-label" for="customSwitch1">Part Time</label>
</div>

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>


@endsection

