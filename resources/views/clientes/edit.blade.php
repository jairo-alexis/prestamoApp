@extends('layouts.plantillaBase')
@section('contenido')

<h2>Editar cliente</h2>

{{ $cliente->id }}


<form action="/clientes/{{ $cliente->id }}" method="post" class="row g-3">
    @csrf
    @method('PUT')
  <div class="col-12">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre" value="{{$cliente->name}}">
  </div>
  <div class="col-12">
    <label for="apellido" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="inputApellido" name="apellido" value="{{$cliente->apellido}}">
  </div>
  <div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="email@tuemail.com" value="{{$cliente->email}}">
  </div>
  <div class="col-12">
    <label for="foto" class="form-label">Foto</label>
    <input type="text" class="form-control" id="inputFoto" name="foto" value="{{$cliente->profile_photo_path}}">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
     <a href="/clientes" class="btn btn-danger">Cancelar</a>
  </div>
</form>

@endsection
