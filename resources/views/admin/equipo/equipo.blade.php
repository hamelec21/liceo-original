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
Nuevo Integrante
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <div class="container text-center bg-primary box-header "><h4>Nueva Noticia</h4></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row p-3">
            <div class=" col-12 ">
                <form action="{{route ('equipo.crear')}}" method="POST"enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Nombre</label>
                      <input type="text" name = "nombre" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Cargo</label>
                        <input type="text" name = "cargo" class="form-control" id="exampleFormControlInput1" placeholder="Cargo" required>
                      </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Descripción</label>
                      <textarea class="form-control"name = "descripcion" placeholder="Descripción Noticia" id="editor1" style="height: 100px" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <input type="file" name = "foto" class="form-control" id="exampleFormControlInput3"  required>
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


<!--Fin modal crear Proyectos -->

<!--Inico table de Registros -->
<div class="container p-1">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Fotografia</th>
          <th scope="col">Nombres</th>
          <th scope="col">Cargo</th>
          <th scope="col">Acciones</th>
      </tr>
    </thead>
    @foreach ($equipo as $equipos)
    <tbody>
      <tr>
        <td> <img src="{{asset($equipos->foto)}}"  height="100" width="100"   alt="{{$equipos->foto}}"></td>
          <td>{{$equipos->nombre}}</td>
          <td>{{$equipos->cargo}}</td>

        <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="{{route ('equipo.edit',$equipos->id)}}" class="btn btn-warning ">editar</a>
        </div>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$equipos->id}}">
          Eliminar
        </button>
      </td>
      </tr>
      @include('/admin/equipo/delete')
    @endforeach
    </tbody>
  </table>
</div>

<!---->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>CKEDITOR.replace( 'editor1' );</script>
 <!---->
@endsection



