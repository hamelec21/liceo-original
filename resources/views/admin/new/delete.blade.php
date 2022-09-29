<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$noticias->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{route ('noticia.delete', $noticias->id)}}" method="POST">
     {{ csrf_field() }}
     @method('DELETE')
    
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Noticia</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         Deseas Eliminar esta Noticia: <b>{{$noticias->titulo}}</b>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          
          <button class="btn btn-danger " >Eliminar</button>
    
        </div>
      </div>
    </form>
    </div>
  </div>