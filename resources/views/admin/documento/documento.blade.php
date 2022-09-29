<link href="/assets/styless/styless.css" rel="stylesheet">
<!--Nombre de Pestaña-->
@section('title', 'Dashboard') 
<!--barra lateral -->
@extends('adminlte::page')

@section('content')
<div class="container ">
  @if (session('mensaje'))
      <div class="alert alert-success">
          {{session('mensaje')}}
      </div>
  @endif

<!--Inicio modal crear Proyectos -->
<!-- Button trigger modal -->
<br>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
Subir Documento
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <div class="container text-center bg-primary box-header "><h4>Nueva Foto</h4></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row p-3">
            <div class=" col-12 ">
                <form action="{{route ('documento.crear')}}" method="POST"enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="foto">Nombre Documento</label>
                    <input type="text" name = "nombre" class="form-control" id="exampleFormControlInput1"  placeholder="Nombre Documento" required>
                  </div>
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <input type="file" name = "documento" class="form-control" id="exampleFormControlInput2"   required>
                    </div>

                    </div>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                  </form>
            </div>
            </div>
    </div>
      </div>
      
    </div>
  </div>
</div>
<br>
<!--Inico table de Registros -->
<div class="container p-1">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nombre Documento</th>
          <th scope="col">Descarga</th>
          <th scope="col">Acciones</th> 
      </tr>
    </thead>
    @foreach ($doc as $docs)  
    <tbody>
      <tr>
          <td>{{$docs->nombre}}</td>
          <td><a href="/{{$docs->documento}}" download="{{$docs->nombre}}">
            Descargar Archivo
            </a></td>
        <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="{{route ('documento.edit',$docs->id)}}" class="btn btn-warning ">editar</a>
        </div>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$docs->id}}">
          Eliminar
        </button>
      </td>
      </tr>
      @include('/admin/documento/delete')
    @endforeach
    </tbody>
  </table>
</div>

{{--{{$galeria->links()}}--}}





<!---->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>CKEDITOR.replace( 'editor1' );</script>
 <!---->   
@endsection

    

