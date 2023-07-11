<?php

namespace App\Http\Controllers;

use App\Models\Relacion;
use Illuminate\Http\Request;

use App\Models\Curso;
use App\Models\User;

class RelacionController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $relaciones = Relacion::with(['curso', 'maestro', 'alumno'])->get();
    return view('relaciones.index', compact('relaciones'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $cursos = Curso::all();
    $maestros = User::role('Maestro')->get();
    $alumnos = User::role('Alumno')->get();

    return view('relaciones.create', compact('cursos', 'maestros', 'alumnos'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'maestro_id' => 'required|exists:users,id',
      'curso_id' => 'required|exists:cursos,id',
      'alumno_id' => 'required|exists:users,id',
    ]);

    Relacion::create($validatedData);

    return redirect()->route('relacion.index')->with('success', 'Relación creada exitosamente');
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id)
  {
    $relacion = Relacion::findOrFail($id);
    $maestros = User::role('Maestro')->get();
    $alumnos = User::role('Alumno')->get();

    return view('relaciones.edit', compact('relacion', 'maestros', 'alumnos'));
  }


  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'maestro_id' => 'required|exists:users,id',
      'alumno_id' => 'required|exists:users,id',
    ]);

    $relacion = Relacion::findOrFail($id);
    $relacion->maestro_id = $validatedData['maestro_id'];
    $relacion->alumno_id = $validatedData['alumno_id'];
    $relacion->save();

    return redirect()->route('relacion.index')->with('success', 'Relación actualizada exitosamente');
  }


  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $relacion = Relacion::findOrFail($id);
    $relacion->delete();

    return redirect()->route('relacion.index')->with('success', 'Relación eliminada exitosamente');
  }
}
