@extends('layouts.app')

@section('title', 'DASHBOARD')

@section('contents')
<h1 class="mb-0">{{ Auth::user()->roles->first()->name }} - {{ Auth::user()->name }}</h1>
<hr />

<div class="container-fluid text-info" style="font-weight: bold;">
  @if(Auth::user()->roles->first()->name === 'Admin')


  <p>Como ADMINISTRADOR tienes el control total del Dashboard</p>
  <p>Empieza a usar las herramientas en el menú de tu izquierda</p>


  @elseif(Auth::user()->roles->first()->name === 'Maestro')

  <p>Como MAESTRO, en el Dashboard puedes:</p>
  <p>Ver y Editar Alumnos</p>
  <p>Ver, Editar y Eliminar Cursos y Relaciones</p>
  <p>Puedes empezar a usar las herramientas en el menú de tu izquierda</p>


  @elseif(Auth::user()->roles->first()->name === 'Alumno')

  <p>Como ALUMNO, en el Dashboard puedes:</p>
  <p>Ver tu información y ver la lista de tus compañeros</p>
  <p>Ver y Editar tus Cursos</p>
  <p>Ver las Relaciones</p>
  <p>Puedes empezar a usar las herramientas en el menú de tu izquierda</p>

  @elseif(Auth::user()->roles->first()->name === 'Tutor')
  <p>Como TUTOR, en el Dashboard puedes:</p>
  <p>Ver tu información</p>
  <p>Ver los Alumnos, Cursos y Relaciones</p>
  <p>Puedes empezar a usar las herramientas en el menú de tu izquierda</p>


  @endif
</div>
<hr />
@endsection