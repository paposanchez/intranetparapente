@extends('adminlte::page')

@section('content')
<div class="card">
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
    <div class="card-header">
      <h3 class="card-title">Location</h3>
            <div class="col col-xs-6 text-right">
                <a class="btn btn-primary btn-sm" href="{{ url("servicio/create") }}">
                <i class="fas fa-folder">
                </i>
                Crear Servicio
                </a>
      </div>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped table-bordered table-list " id="departamento">
          <thead>
              <tr>
                  <th>
                      Hora
                  </th>
                  <th>
                      Sector
                  </th>
                  <th>
                    Ubicacion
                </th>
                <th>
                    Parque
                </th>
                <th>
                    link
                </th>
                <th>
                   Deudo Gestor
                </th>
                  <th>
                    Acciones
                 </th>
              </tr>
          </thead>
          @foreach ($serv as $table)
          <tbody>
              <tr>
                  <td>
                      <a>
                        {{ $table->hora }}
                      </a>
                  </td>
                  <td>
                    <a class="park-color" id="modal-link{{$table->id}}" onclick="showModal(this)" href="javascript:void(0);"
                    par="{{ $table->parque->name }}"
                    sec="Capilla Cinerario"
                    img="{{ $table->ubicacion}}"
                    fecha="{{ Carbon\Carbon::parse($table->hora)->format('d-m-Y') }}"
                    fallecido="{{ $table->difunto }}"
                    modulo="-"
                    acceso="Recoleta"
                    hora="{{ Carbon\Carbon::parse($table->hora)->format('H:m') }}"
                    nombreparque="Parque del Recuerdo Am&eacute;rico Vespucio">
                    {{ $table->difunto }}                                              </a>
                  </td>
                  <td>
                    {{ $table->sector }}
                  </td>
                  <td>
                    {{ $table->parque->name }}
                  </td>
                  <td>
                    {{ $table->link }}
                  </td>
                  <td>
                    {{ $table->deudogestor }}
                  </td>
                  <td>
                    {{ $table->user->name }}
                  </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-info btn-sm" href="{{ route('servicio.edit', $table->id) }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Editar
                      </a>
                      <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Borrar
                      </a>
                  </td>
                  <td>
                    <i id="cast" class="fab fa-chromecast"></i>
                  </td>
              </tr>

          </tbody>
          @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <div class="modal fade" id="Modal" role="dialog">
    <div class="modal-dialog" role="document" id="is-modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <a class="park-color mr-auto" href="javascript:void(0)" id="imprime"><img class="icon-print" src="fonts/imprimir.png"></span> Imprimir</a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="close-modal-icon"aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="divimprimir"> 

                    <h3 id="modal-field-fallecido" class="park-color modal-important-text" style="text-align: center"></h3>					
                    <h3 id="modal-field-hora" class="park-color modal-text" style="text-align: center"></h3>					
                    <h3 id="modal-field-nombreparque" class="park-color modal-important-text" style="text-align: center"></h3>
                    <h3 id="modal-field-sec" class="park-color modal-text" style="text-align: center"></h3>
                    <h3 id="modal-field-acceso" class="park-color modal-text" style="text-align: center"></h3>										

                    <img id="modal-img" class="img-fluid modal-img" src="" alt=" " style="display: block; margin-left: auto; margin-right: auto;">       
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('js/abituario.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/castjs/4.1.2/cast.min.js"></script>

<script>
  // Create new Castjs instance
const cjs = new Castjs();

// Wait for user interaction
$('#cast').on('click', function() {
    // Check if casting is available
    if (cjs.available) {
        // Initiate new cast session
        cjs.cast('https://youtu.be/MZeZFqy8DVY');
    }
});
</script>
@stop

