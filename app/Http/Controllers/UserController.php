<?php

namespace App\Http\Controllers;

use App\Models\User;
//use Database\Seeders\RoleSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $user = User::orderBy('created_at', 'DESC')->get();

    return view('users.index', compact('user'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('users.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // Validar 
    $validatedData = $request->validate([
      'name' => 'required|string',
      'email' => 'required|email|unique:users',
      'password' => 'required|min:8',
      'role' => 'required|numeric',
    ]);

    // Crear
    $user = new User();
    $user->name = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->password = Hash::make($validatedData['password']);

    // Obtiene y asigna el rol con el formulario
    $role = Role::findOrFail($validatedData['role']);

    // Asigna rol
    $user->assignRole($role);

    // Guardar
    $user->save();


    return redirect()->route('users')->with('success', 'User added successfully');
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    $user = User::findOrFail($id);

    return view('users.show', compact('user'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    $user = User::findOrFail($id);

    return view('users.edit', compact('user'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    $user = User::findOrFail($id);

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));

    // Obtén el nuevo rol seleccionado del formulario
    $newRole = Role::findOrFail($request->input('role'));

    // Obtén el rol actual del usuario
    $currentRole = $user->roles->first();

    // Si el nuevo rol es diferente al actual, actualiza el rol del usuario
    if ($newRole->id !== $currentRole->id) {
      $user->syncRoles($newRole);
    }

    $user->save();

    return redirect()->route('users')->with('success', 'User updated successfully');
  }


  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    $user = User::findOrFail($id);

    $user->delete();

    return redirect()->route('users')->with('success', 'User deleted successfully');
  }
}
