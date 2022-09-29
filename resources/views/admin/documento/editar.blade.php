
<link href="/assets/styless/styless.css" rel="stylesheet">
<!--Nombre de Pestaña-->
@section('title', 'Dashboard') 
<!--barra lateral -->
@extends('adminlte::page')

@section('content')

<div class="container">

<div class="row p-3">
    <div class=" col-12 ">
      <form action="{{route ('documento.update',$note->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="text" name = "nombre" class="form-control" id="nombre" value ="{{$note->nombre}}"  >
          </div> 
            <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" name = "documento" class="form-control" id="foto" value ="{{$note->documento}}"  >
            </div>
            <button class="btn btn-warning " type="submit">Guardar</button>
      </form>
    </div>
    </div>

</div>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>

CKEDITOR.replace( 'editor2' );
</script>

    @endsection