<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Definición de roles
    $admin = Role::create(['name' => 'admin']);
    $maestro = Role::create(['name' => 'maestro']);
    $alumno = Role::create(['name' => 'alumno']);
    $tutor = Role::create(['name' => 'tutor']);

    // User Admin
    Permission::create(['name' => 'user'])->syncRoles([$admin, $maestro, $alumno, $tutor]);
    Permission::create(['name' => 'users.create'])->syncRoles([$admin, $maestro]);
    Permission::create(['name' => 'users.store'])->syncRoles($admin);
    Permission::create(['name' => 'users.show'])->syncRoles([$admin, $maestro]);
    Permission::create(['name' => 'users.edit'])->syncRoles([$admin, $maestro]);
    Permission::create(['name' => 'users.update'])->syncRoles($admin);
    Permission::create(['name' => 'users.destroy'])->syncRoles($admin);


    // Cursos
    /*
    Permission::create(['name' => 'ver usuarios']);
    Permission::create(['name' => 'crear usuarios']);
    Permission::create(['name' => 'editar usuarios']);
    Permission::create(['name' => 'eliminar usuarios']);
    */

    // Relaciones
    /*
    Permission::create(['name' => 'ver usuarios']);
    Permission::create(['name' => 'crear usuarios']);
    Permission::create(['name' => 'editar usuarios']);
    Permission::create(['name' => 'eliminar usuarios']);
    */
  }
}
