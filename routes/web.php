<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MaestroController;

Route::get('/', function () {
  return view('welcome');
});


Route::controller(AuthController::class)->group(function () {
  Route::get('register', 'register')->name('register');
  Route::post('register', 'registerSave')->name('register.save');

  Route::get('login', 'login')->name('login');
  Route::post('login', 'loginAction')->name('login.action');

  Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
  Route::get('dashboard', function () {
    return view('dashboard');
  })->name('dashboard');

  Route::controller(UserController::class)->prefix('users')->group(function () {
    Route::get('/users/search', [UserController::class, 'search'])->name('users.search');
    Route::get('', 'index')->name('users');
    Route::get('create', 'create')->name('users.create');
    Route::post('store', 'store')->name('users.store');
    Route::get('show/{id}', 'show')->name('users.show');
    Route::get('edit/{id}', 'edit')->name('users.edit');
    Route::put('update/{id}', 'update')->name('users.update');
    Route::delete('destroy/{id}', 'destroy')->name('users.destroy');
  });

  Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
