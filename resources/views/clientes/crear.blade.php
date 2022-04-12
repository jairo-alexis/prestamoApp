
@extends('layouts.plantillaBase')
@section('contenido')

<h2>Crear nuevo cliente</h2>

<form action="/clientes" method="post" class="row g-3">
    @csrf
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="nombre">
  </div>
  <div class="col-md-6">
    <label for="apellido" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="inputApellido" name="apellido">
  </div>
  <div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="email@tuemail.com">
  </div>
  <div class="col-12">
    <label for="foto" class="form-label">Foto</label>
    <input type="text" class="form-control" id="inputFoto" name="foto">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/clientes" class="btn btn-danger">Cancelar</a>
  </div>
</form>


@endsection
