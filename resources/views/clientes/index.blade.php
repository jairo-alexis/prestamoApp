

@extends('layouts.plantillaBase')
@section('contenido')

<h2>Todos los clientes</h2>

<a class ="btn btn-primary" href="clientes/create">Crear</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Email</th>
        <th scope="col">Phot0</th>
        <th scope="col">Creado</th>
        <th scope="col">Modificado</th>
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td> {{$cliente->id}} </td>
            <td> {{$cliente->name}} </td>
            <td> {{$cliente->apellido}} </td>
            <td> {{$cliente->email}} </td>
            <td> {{$cliente->profile_photo_path}} </td>
            <td> {{$cliente->created_at}} </td>
            <td> {{$cliente->created_at}} </td>
            <td>
                <form action="/clientes/{{ $cliente->id }}" method="post">
                    <a href="clientes/{{ $cliente->id }}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection
