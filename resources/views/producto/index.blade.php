@extends('welcome')

@section('content')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Nuevo 
  </button>
<br>
<br>


<div class="table-responsive">

    <table class="table">
        <thead class="bg-dark text-white">
        
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th scope="col">Nombre</th>
                <th>cantidad</th>
                <th>precio</th>
                <th>acciones</th>
                <th></th>
            </tr>
            
        </thead>
        <tbody>
            @php
            $i=1;                
            @endphp
            @foreach ($productos as $producto)

            <tr>
                <td scope="row">{{$i++}}</td>
                <td >{{$producto->Categoria->nombre}}</td>
                <td >{{$producto->nombre}}</td>
                <td >{{$producto->cantidad}}</td>
                <td >{{$producto->precio}}</td>

                {{-- acciones --}}

                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$producto->id}}">
                    Editar
                </button>
                
                <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$producto->id}}">
                    Eliminar
                </button>
                </td>
                
                
            
            </tr>
            @include('producto.info')
            @endforeach                
        
        </tbody>
    </table>
</div>
@include('producto.create')

@endsection