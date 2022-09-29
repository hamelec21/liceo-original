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
Subir Nueva Foto
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
                <form action="{{route ('foto.crear')}}" method="POST"enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="foto">Foto</label>
                      <input type="file" name = "foto" class="form-control" id="exampleFormControlInput3"  accept=image/* required>
                    </div>
                    <div class="form-group ">
                      <label for="exampleFormControlSelect1">Seccion</label>
                      <select class="form-control"  name ="seccion" id="exampleFormControlSelect1">
                        <option>--Selecciones Area de Trabajo--</option>
                        <option>Home-footer</option>
                        <option>Cientifico Humanista</option>
                        <option>Construcion Metálicas</option>
                        <option>Electricidad</option>
                        <option>Quimica Industrial</option>
                    </select>
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
<div class="container">

  <div class="row">
    @foreach ($foto as $fotos)  
    <div class="card ml-3" style="width: 15rem;">
      <img src="{{asset($fotos->foto)}}" class="card-img-top" alt="...">
      <div class="card-body text-center">
        <a href="{{route ('foto.edit',$fotos->id)}}" class="btn btn-warning ">editar</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$fotos->id}}">
          Eliminar
        </button>
        <br>
        <p>{{$fotos->seccion}}</p>
      </div>
    </div>
    @include('/admin/foto/delete')
    @endforeach
 <br>
  </div>
  
</div>

{{$foto->links()}}





<!---->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>CKEDITOR.replace( 'editor1' );</script>
 <!---->   
@endsection

    

