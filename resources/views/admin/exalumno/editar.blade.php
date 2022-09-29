
<link href="/assets/styless/styless.css" rel="stylesheet">
<!--Nombre de Pestaña-->
@section('title', 'Dashboard') 
<!--barra lateral -->
@extends('adminlte::page')

@section('content')

<div class="container">

<div class="row p-3">
    <div class=" col-12 ">
      <form action="{{route ('exalumno.update',$note->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Nombre</label>
              <input type="text" name = "nombre" class="form-control" id="parnets" value ="{{$note->nombre}}" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Profesion </label>
                <input type="text" name = "profesion" class="form-control" id="parnets" value ="{{$note->profesion}}" >
              </div>

            <div class="form-group">
              <label for="exampleFormControlInput11">Descripción</label>
              <textarea id ="editor2"  name ="contenido"   value ="{{$note->contenido}}" >{!!$note->contenido!!}</textarea>
            </div>
            <div class="form-group">
              <label for="foto">Foto</label>
              <input type="file" name = "foto" class="form-control" id="foto" value ="{{$note->foto}}"  >
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