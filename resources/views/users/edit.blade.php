@extends('layouts.app')

@section('title', 'Edit User')

@section('contents')
<h1 class="mb-0">Edit User</h1>
<hr />
<form action="{{ route('users.update', $user->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $user->name }}">
    </div>
    <div class="col mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
    </div>
  </div>
  <div class="row">
    <div class="col mb-3">
      <label class="form-label">Prassword</label>
      <input type="password" name="password" class="form-control" placeholder="Password" value="{{ $user->password }}">
    </div>
    <div class="col mb-3">
      <label class="form-label">Role</label>
      <select name="role" class="form-control">
        <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
        <option value="2" {{ $user->role == 2 ? 'selected' : '' }}>Maestro</option>
        <option value="3" {{ $user->role == 3 ? 'selected' : '' }}>Alumno</option>
        <option value="4" {{ $user->role == 4 ? 'selected' : '' }}>Tutor</option>
      </select>
    </div>

  </div>




  <div class="row">
    <div class="d-grid">
      <button class="btn btn-warning">Update</button>
    </div>
  </div>
</form>
@endsection