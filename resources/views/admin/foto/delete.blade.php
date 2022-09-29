<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$fotos->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{route ('foto.delete', $fotos->id)}}" method="POST">
     {{ csrf_field() }}
     @method('DELETE')
    
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar A un Exalumno</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         Deseas Eliminar Esta Foto
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-danger " >Eliminar</button>
        </div>
      </div>
    </form>
    </div>
  </div>