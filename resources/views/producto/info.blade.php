<!-- Button trigger modal -->
<
  
  <!-- Modal edit -->
  <div class="modal fade" id="edit{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">editar producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

    <form action="{{route('productos.update',$producto->id)}}" method="post">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="mb-3">
                <label for="" class="form-label">categoria</label>
                <select name="categoria_id" id="" class="form-control">
                    @foreach($categorias as $categoria)
                    @if($categoria->id == $producto->categoria_id)
                    <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
                    @else
                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>

          <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="nombre"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$producto->nombre}}"
            />
          </div>
          <div class="mb-3">
            <label for="" class="form-label">cantidad</label>
            <input
                type="text"
                class="form-control"
                name="cantidad"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$producto->cantidad}}"
            />
          </div>

          <div class="mb-3">
            <label for="" class="form-label">precio</label>
            <input
                type="text"
                class="form-control"
                name="precio"
                id=""
                aria-describedby="helpId"
                placeholder=""
                value="{{$producto->precio}}"
            />
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">actualizar</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  <!-- Modal DELETE -->
  <div class="modal fade" id="delete{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">eliminar producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

    <form action="{{route('productos.destroy',$producto->id)}}" method="post">
            @csrf
            @method('DELETE')
        <div class="modal-body">
         
            ESTAS SEGURO DE ELIMINAR <strong>{{$producto->nombre}}?</strong>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">CONFIRMAR</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  