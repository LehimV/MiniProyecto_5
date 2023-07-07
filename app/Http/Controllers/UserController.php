<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
    User::create($request->all());

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
    $user->role = $request->input('role');

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
