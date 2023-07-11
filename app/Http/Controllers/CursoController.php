<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CursoController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $cursos = Curso::orderBy('id', 'DESC')->get();

    return view('cursos.index', compact('cursos'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('cursos.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required|string',
      'level' => 'required|string',
    ]);

    $curso = new Curso();
    $curso->name_curso = $validatedData['name'];
    $curso->level = $validatedData['level'];
    $curso->save();

    return redirect()->route('cursos')->with('success', 'Curso added successfully');
  }


  /**
   * Display the specified resource.
   */
  public function show($id)
  {
    $curso = Curso::findOrFail($id);

    return view('cursos.show', compact('curso'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id)
  {
    $curso = Curso::findOrFail($id);

    return view('cursos.edit', compact('curso'));
  }


  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'name' => 'required|string',
      'level' => 'required|string',
    ]);

    $curso = Curso::findOrFail($id);
    $curso->name_curso = $validatedData['name'];
    $curso->level = $validatedData['level'];
    $curso->save();

    return redirect()->route('cursos')->with('success', 'Curso updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $curso = Curso::findOrFail($id);
    $curso->delete();

    return redirect()->route('cursos')->with('success', 'Curso deleted successfully');
  }
}
