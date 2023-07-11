<?php

namespace App\Http\Controllers;

use App\Models\Relacion;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $relaciones = Relacion::all();

    return view('relaciones.index', compact('relaciones'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('relaciones.create');
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

    return view('relaciones.edit', compact('relacion'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'maestro_id' => 'required|exists:users,id',
      'curso_id' => 'required|exists:cursos,id',
      'alumno_id' => 'required|exists:users,id',
    ]);

    $relacion = Relacion::findOrFail($id);
    $relacion->update($validatedData);

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
