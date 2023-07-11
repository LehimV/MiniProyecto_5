@extends('layouts.app')

@section('title', 'Añadir Nuevo Curso')

@section('contents')
<h1 class="mb-0">Añadir nuevo Curso</h1>
<hr />
<form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row mb-3">
    <div class="col">
      <input type="text" name="name" class="form-control" placeholder="Nombre del Curso">
    </div>

    <div class="col mb-3">
      <select name="level" class="form-control">
        <option value="" selected disabled>Nivel del curso</option>
        <option value="L1">L1</option>
        <option value="L2">L2</option>
        <option value="L3">L3</option>
        <option value="L4">L4</option>
        <option value="L5">L5</option>
      </select>
    </div>


    <div class="row">
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</form>
@endsection