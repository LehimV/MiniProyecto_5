@extends('layouts.app')


@section('title', 'RELACIONES')

@section('contents')


<div class="d-flex align-items-center justify-content-between">
  <h1 class="mb-0">Relaciones</h1>
  @can('users.create')
  <a href="{{ route('relacion.create') }}" class="btn btn-success"><i class="fas fa fa-plus"></i> Crear Relacion</a>
  @endcan
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif
<table id="" class="table table-hover">
  <thead class="table-primary">
    <tr>
      <th>#</th>
      <th>Curso</th>
      <th>Maestro</th>
      @can('users.edit')
      <th>Alumno</th>

      <th class="d-flex">Edit / Delete</th>
      @endcan


    </tr>
  </thead>
  <tbody id="user-search-results">
    @if($relaciones->count() > 0)
    @foreach($relaciones as $relacion)
    <tr>
      <td class="align-middle">{{ $loop->iteration }}</td>
      <td class="align-middle">{{ $relacion->curso->name_curso }}</td>
      <td class="align-middle">{{ $relacion->maestro->name }}</td>
      <td class="align-middle">{{ $relacion->alumno->name }}</td>
      <td class="align-middle">
        <div class="gap-2" role="group" aria-label="Basic example">

          @can('users.edit')
          <a href="{{ route('relacion.edit', $relacion->id)}}" type="button" class="btn btn-warning">Edit</a>
          @endcan

          @can('users.destroy')
          <form action="{{ route('relacion.destroy', $relacion->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger m-0">Delete</button>
          </form>
          @endcan
        </div>
      </td>
    </tr>
    @endforeach
    @else
    <tr>
      <td class="text-center" colspan="5">User not found</td>
    </tr>
    @endif
  </tbody>

</table>


@endsection