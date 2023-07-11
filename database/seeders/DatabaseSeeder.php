<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {

    // Roles y permisos
    $this->call(RoleSeeder::class);

    //Usuarios base
    $this->call(UserSeeder::class);

    //Cursos base
    $this->call(CursoSeeder::class);

    //Relaciones base
    $this->call(RelacionSeeder::class);

    /*
    \App\Models\User::factory(2)->create()->each(function ($user) {
      $user->assignRole('tutor');
      
    });
    */

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
