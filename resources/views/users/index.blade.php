@extends('layouts.app')

@section('title', 'Home User')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
  <h1 class="mb-0">List Users</h1>
  <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
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
      <th>Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Role</th>
      <th class="d-flex">Edit / Delete</th>
    </tr>
  </thead>
  <tbody>
    @if($user->count() > 0)
    @foreach($user as $rs)
    <tr>
      <td class="align-middle">{{ $loop->iteration }}</td>
      <td class="align-middle">{{ $rs->name }}</td>
      <td class="align-middle">{{ $rs->email }}</td>
      <td class="align-middle">************</td>
      <td class="align-middle">{{ $rs->role }}</td>
      <td class="align-middle">
        <div class="gap-2" role="group" aria-label="Basic example">

          <a href="{{ route('users.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
          <form action="{{ route('users.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger m-0">Delete</button>
          </form>
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