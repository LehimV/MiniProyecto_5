@extends('layouts.app')

@section('title', ' CURSOS')

@section('contents')
<h1 class="mb-0">Editar Curso</h1>
<hr />
<form action="{{ route('cursos.update', $curso->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-lg-2 mb-3">
      <label class="form-label fw-semibold">ID</label>
      <input type="text" name="ID" class="form-control" placeholder="ID" value="{{ $curso->id}}" disabled>
    </div>


    <div class="row">
      <div class="col-lg-4 mb-3">
        <label class="form-label fw-semibold">Curso</label>
        <input type="text" name="name" class="form-control" placeholder="Nombre del Curso" value="{{ $curso->name_curso}}">
      </div>


      <div class="col-lg-4 mb-3">
        <label class="form-label fw-semibold">Nivel</label>

        <select name="level" class="form-control">
          <option value="L1" {{ $curso->level === 'L1' ? 'selected' : '' }}>L1</option>
          <option value="L2" {{ $curso->level === 'L2' ? 'selected' : '' }}>L2</option>
          <option value="L3" {{ $curso->level === 'L3' ? 'selected' : '' }}>L3</option>
          <option value="L4" {{ $curso->level === 'L4' ? 'selected' : '' }}>L4</option>
          <option value="L5" {{ $curso->level === 'L5' ? 'selected' : '' }}>L5</option>
        </select>
      </div>
    </div>
  </div>




  <div class="row">
    <div class="col">
      <button class="btn btn-warning text-white fw-bold">Actualizar</button>
    </div>
  </div>
</form>
@endsection