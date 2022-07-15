@extends('layouts.plantillabase')

@section('contenido')

<a href="articulos/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CODIGO</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">CANTIDAD</th>
            <th scope="col">PRECIO</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articulos as $articulo)
        <tr>
            <td>{{$articulo->id}}</td>   
            <td>{{$articulo->codigo}}</td>   
            <td>{{$articulo->descripcion}}</td>   
            <td>{{$articulo->cantidad}}</td>   
            <td>{{$articulo->precio}}</td>    
            <td>
                <a class="btn btn-info">Editar</a>
                <button class="btn btn-danger">Eliminar</button>
            </td>
        </tr>            
        @endforeach
    </tbody>
</table>

@endsection