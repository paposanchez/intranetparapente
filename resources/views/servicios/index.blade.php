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
      <h3 class="card-title">Servicios</h3>
            <div class="col col-xs-6 text-right">
                <a class="btn btn-primary btn-sm" href="{{ url("servicios/create") }}">
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
                      Fecha :: Hora
                  </th>
                  <th>
                      Difunto
                  </th>
                  <th>
                    sector
                </th>
                <th>
                    parque
                </th>
                  <th>
                    Acciones
                 </th>
              </tr>
          </thead>
          @foreach ($servi as $lista)
          <tbody>
              <tr>
                  <td>
                      <a>
                        {{ $lista->fecha }} :: {{ $lista->hora }}
                      </a>
                  </td>
                  <td>
                    {{ $lista->difunto }}
                  </td>
                  <td>
                    {{ $lista->sector }}
                  </td>
                  <td>
                    {{ $lista->deudogestor }}
                  </td>
                  <td class="project-actions text-right">
                      <a class="btn btn-info btn-sm" href="{{ route('servicios.edit', $lista->id) }}">
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
              </tr>

          </tbody>
          @endforeach
      </table>
    </div>
    <!-- /.card-body -->
  </div>

@endsection
@push('scripts')
    <!-- DataTables -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap.min.js"></script>

    <script>
        $('#li_stations').addClass('active');
        $(function () {
            $('#stations-table').DataTable({
            'pageLength': 25,
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : false,
            'autoWidth'   : false,
            'order'       : [],
            'language': {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
            })
        });
    </script>
@endpush

