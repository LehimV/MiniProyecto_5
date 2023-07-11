@extends('layouts.app')

@section('title', 'RELACION')

@section('contents')
<h1 class="mb-0">Añadir nueva Relación</h1>
<hr />
<form action="{{ route('relacion.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="row mb-3">
    <div class="col-lg-4">
      <select name="curso_id" class="form-control">
        <option value="" selected disabled>Seleccionar Curso</option>
        @foreach($cursos as $curso)
        <option value="{{ $curso->id }}">{{ $curso->name_curso }}</option>
        @endforeach
      </select>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col">
      <select name="maestro_id" class="form-control">
        <option value="" selected disabled>Seleccionar Maestro</option>
        @foreach($maestros as $maestro)
        <option value="{{ $maestro->id }}">{{ $maestro->name }}</option>
        @endforeach
      </select>
    </div>

    <div class="col">
      <select name="alumno_id" class="form-control">
        <option value="" selected disabled>Seleccionar Alumno</option>
        @foreach($alumnos as $alumno)
        <option value="{{ $alumno->id }}">{{ $alumno->name }}</option>
        @endforeach
      </select>
    </div>
  </div>


  <div class="row">
    <div class="col">
      <button type="submit" class="btn btn-outline-info fw-bold">Crear</button>
    </div>
  </div>

</form>

@endsection