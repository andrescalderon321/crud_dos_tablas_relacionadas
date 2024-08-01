@extends('welcome')

@section('content')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Nuevo 
  </button>
<br><br>
<div
    class="table-responsive"
>
    <table
        class="table"
    >
        <thead
        class="bg-dark"
        >
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i=1;                
            @endphp
            @foreach ($categorias as $categoria)

            <tr>

                <td scope="row">{{$i++}}</td>
                <td >{{$categoria->nombre}}</td>
                <td >{{$categoria->descripcion}}</td>

                <td>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$categoria->id}}">
                    Editar
                </button>
                <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$categoria->id}}">
                    Eliminar
                </button>
                </td>
                
                
            
            </tr>
            @include('categoria.info')
            @endforeach                
        
        </tbody>
    </table>
</div>
@include('categoria.create')

@endsection