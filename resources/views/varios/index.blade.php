<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   
    <title>SELECT DEPENDIENTES DE TRES NIVELES</title>
</head>
<body>
    <div>
        <select name="parque" id="_categoria" >
          <option value="">Selecciones </option>
            @foreach ($categorias as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <select name="" id="_subcategoria"></select>
        <select name="" id="_empresa"></select>
    </div>
    <script>

        $("#parque").select2({
                                placeholder: "Selecciona una opción",
                                language: "es",
                                width: '100%',
                                ajax: {
                                    url: "{{ route('ciudad.select2') }}",
                                    dataType: 'json',
                                    delay: 250,
                                    data: function (params) {
                                        return {
                                            q: params.term
                                        };
                                    },
                                    processResults: function (data) {
                                        return {
                                            results: data
                                        };
                                    },
                                    cache: true
                                },
                                templateResult: plantillaBusqueda,
                                templateSelection: plantillaSeleccionado
                            });
        
        function plantillaBusqueda(ciudad) {
                    return ciudad.nombre;
                }
        
        function plantillaSeleccionado(ciudad) {
                if (ciudad.text != "") {
                    return ciudad.text
                }
                return ciudad.nombre;
            }
        </script>
    <script>
      const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
      document.getElementById('_categoria').addEventListener('change',(e)=>{
          fetch('subcategorias',{
              method : 'POST',
              body: JSON.stringify({texto : e.target.value}),
              headers:{
                  'Content-Type': 'application/json',
                  "X-CSRF-Token": csrfToken
              }
          }).then(response =>{
              return response.json()
          }).then( data =>{
              var opciones ="<option value=''>Elegir</option>";
              for (let i in data.lista) {
                 opciones+= '<option value="'+data.lista[i].id+'">'+data.lista[i].sector+'</option>';
              }
              document.getElementById("_subcategoria").innerHTML = opciones;
          }).catch(error =>console.error(error));
      })
  
  
  </script>


</body>
</html>