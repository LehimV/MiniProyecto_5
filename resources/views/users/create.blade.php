@extends('layouts.app')

@section('title', 'USUARIOS')

@section('contents')
<h1 class="mb-0">Crear nuevo Usuario</h1>
<hr />
<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row mb-3">
    <div class="col">
      <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="col">
      <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-lg-4">
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>

    <div class="col-lg-4">
      <div class="form-group">

        <select name="role" id="role" class="form-control">
          <option value="1">Admin</option>
          <option value="2">Maestro</option>
          <option value="3">Alumno</option>
          <option value="4">Tutor</option>
        </select>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col">
      <button type="submit" class="btn btn-outline-info fw-bold">Crear</button>
    </div>
  </div>
</form>
@endsection