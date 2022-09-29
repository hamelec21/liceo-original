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
{{--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
Agregar Nueva Especialidad
</button>--}}
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <div class="container text-center bg-primary box-header "><h4>Nueva Especialidad</h4></div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="row p-3">
            <div class=" col-12 ">
                <form action="{{route ('nosotro.crear')}}" method="POST"enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Seccion</label>
                      <input type="text" name = "seccion" class="form-control" id="exampleFormControlInput1" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Descripción</label>
                      <textarea class="form-control"name = "contenido" placeholder="Descripción Noticia" id="editor1" style="height: 100px" required></textarea>
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
        <th scope="col">Página</th>
        <th scope="col">Seccion</th>
          <th scope="col">Acciones</th> 
      </tr>
    </thead>
    @foreach ($noso as $nosos)  
    <tbody>
      <tr>
        <td> <img src="{{asset($nosos->foto)}}"  height="100" width="100"   alt="{{$nosos->foto}}"</td>
          <td>{{$nosos->seccion}}</td>
        <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="{{route ('nosotro.edit',$nosos->id)}}" class="btn btn-warning ">editar</a>
        </div>
      </td>
      
        </td>
      </tr>
      
      
    @endforeach
    </tbody>
  </table>
</div>
{{$noso->links()}}
<!---->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>CKEDITOR.replace( 'editor1' );</script>
 <!---->   
@endsection

    

