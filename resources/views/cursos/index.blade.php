@extends('layouts.app')

@section('title', 'CURSOS')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
  <h1 class="mb-0 me-4">Lista de Cursos</h1>
  @can('users.create')
  <a href="{{ route('cursos.create') }}" class="btn btn-success"><i class="fas fa fa-plus"></i> Agregar Curso</a>
  @endcan
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif
<table class="table table-hover">
  <thead class="table-primary">
    <tr>
      <th>#</th>
      <th>Curso</th>
      <th>Nivel</th>
      @can('users.edit')
      <th class="d-flex">Edit / Delete</th>
      @endcan
    </tr>
  </thead>
  <tbody id="curso-search-results">
    @if($cursos->count() > 0)
    @foreach($cursos as $curso)
    <tr>
      <td class="align-middle">{{ $loop->iteration }}</td>
      <td class="align-middle">{{ $curso->name_curso }}</td>
      <td class="align-middle">{{ $curso->level }}</td>

      <td class="align-middle">
        <div class="gap-2" role="group" aria-label="Basic example">
          @can('users.edit')
          <a href="{{ route('cursos.edit', $curso->id) }}" type="button" class="btn btn-warning">Edit</a>

          @endcan
          @can('users.destroy')
          <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger m-0"><i class="fas fa fa-trash"></i> Delete</button>
          </form>
          @endcan
        </div>
      </td>
    </tr>
    @endforeach
    @else
    <tr>
      <td class="text-center" colspan="3">No se ecnontraron cursos</td>
    </tr>
    @endif
  </tbody>
</table>
@endsection