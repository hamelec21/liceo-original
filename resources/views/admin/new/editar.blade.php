
<link href="/assets/styless/styless.css" rel="stylesheet">
<!--Nombre de Pestaña-->
@section('title', 'Dashboard') 
<!--barra lateral -->
@extends('adminlte::page')

@section('content')

<div class="container">

<div class="row p-3">
    <div class=" col-12 ">
      <form action="{{route ('noticia.update',$note->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Titulo</label>
              <input type="text" name = "titulo" class="form-control" id="parnets" value ="{{$note->titulo}}" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput11">Extracto</label>
              <textarea id ="editor1"  name ="extracto"   value ="{{$note->extracto}}" >{!!$note->extracto!!}</textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput11">Descripción</label>
              <textarea id ="editor2"  name ="contenido"   value ="{{$note->contenido}}" >{!!$note->contenido!!}</textarea>
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlInput1">Fecha</label>
              <input type="date" name = "created_at" class="form-control"  value ="{{$note->fecha}}" >
            </div>
            <div class="form-group">
              <label for="foto">Logo</label>
              <input type="file" name = "foto" class="form-control" id="foto" value ="{{$note->foto}}"  >
            </div>
            
            <button class="btn btn-warning " type="submit">Guardar</button>
            
      </form>
    </div>
    </div>

</div>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>

CKEDITOR.replace( 'editor1' );
</script>
<script>

  CKEDITOR.replace( 'editor2' );
  </script>

    @endsection