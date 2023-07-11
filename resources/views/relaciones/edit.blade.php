@extends('layouts.app')

@section('title', 'Edit Relacion')

@section('contents')
<h1 class="mb-0">Edit Relacion</h1>
<hr />
<form action="{{ route('relacion.update', $relacion->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-lg-4 mb-3">
      <label class="form-label">ID</label>
      <input type="text" name="ID" class="form-control" placeholder="ID" value="{{ $relacion->id }}" disabled>
    </div>
    <div class="col-lg-4 mb-3">
      <label class="form-label">Nombre del Curso</label>
      <input type="text" name="name" class="form-control" placeholder="Nombre del Curso" value="{{ $relacion->curso->name_curso }}" disabled>
    </div>
  </div>

  <div class="row">
    <div class="col mb-3">
      <select name="maestro_id" class="form-control">
        <option value="" selected disabled>Seleccionar Maestro</option>
        @foreach($maestros as $maestro)
        <option value="{{ $maestro->id }}">{{ $maestro->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="col mb-3">
      <select name="alumno_id" class="form-control">
        <option value="" selected disabled>Seleccionar Alumno</option>
        @foreach($alumnos as $alumno)
        <option value="{{ $alumno->id }}">{{ $alumno->name }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="row ">
    <div class="col-lg-4 d-grid">
      <button class="btn btn-warning">Update</button>
    </div>
  </div>
</form>
@endsection