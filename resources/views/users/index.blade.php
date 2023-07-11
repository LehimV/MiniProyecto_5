@extends('layouts.app')


@section('title', 'USUARIOS')

@section('contents')


<div class="d-flex align-items-center justify-content-between">
  <h1 class=" mb-0 me-4">List Users</h1>
  @can('users.create')
  <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fas fa fa-plus"></i> Nuevo Usuario</a>
  @endcan
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif
<table id="user-table" class="table table-hover">
  <thead class="table-primary">
    <tr>
      <th>#</th>
      <th>Rol</th>
      <th>Nombre</th>
      @can('users.edit')
      <th>Email</th>
      <th>Password</th>
      <th class="d-flex">Edit / Delete</th>
      @endcan


    </tr>
  </thead>
  <tbody id="user-search-results">
    @if($user->count() > 0)
    @foreach($user as $rs)
    <tr>
      <td class="align-middle">{{ $loop->iteration }}</td>
      <td class="align-middle">{{ $rs->roles->first() ? $rs->roles->first()->name : 'No Role' }}</td>
      <td class="align-middle">{{ $rs->name }}</td>
      @can('users.create')
      <td class="align-middle">{{ $rs->email }}</td>
      <td class="align-middle">************</td>
      @endcan

      <td class="align-middle">
        <div class="gap-2" role="group" aria-label="Basic example">

          @can('users.edit')
          <a href="{{ route('users.edit', $rs->id)}}" type="button" class="btn btn-warning"><i class="fas fa fa-pencil-square-o"></i> Edit</a>
          @endcan

          @can('users.destroy')
          <form action="{{ route('users.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
      <td class="text-center" colspan="5">User not found</td>
    </tr>
    @endif
  </tbody>

</table>


@endsection