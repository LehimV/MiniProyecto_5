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
    $admin = Role::create(['name' => 'Admin']);
    $maestro = Role::create(['name' => 'Maestro']);
    $alumno = Role::create(['name' => 'Alumno']);
    $tutor = Role::create(['name' => 'Tutor']);

    // User Admin
    Permission::create(['name' => 'user'])->syncRoles([$admin, $maestro, $alumno, $tutor]);
    Permission::create(['name' => 'users.create'])->syncRoles($admin);
    Permission::create(['name' => 'users.store'])->syncRoles([$admin, $maestro]);
    Permission::create(['name' => 'users.show'])->syncRoles([$admin, $maestro]);
    Permission::create(['name' => 'users.edit'])->syncRoles([$admin, $maestro]);
    Permission::create(['name' => 'users.update'])->syncRoles([$admin, $maestro]);
    Permission::create(['name' => 'users.destroy'])->syncRoles($admin);
  }
}
