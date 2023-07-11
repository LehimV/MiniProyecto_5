<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Relacion;

class RelacionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Relacion::create([
      'maestro_id' => 1,
      'curso_id' => 1,
      'alumno_id' => 2,
    ]);

    Relacion::create([
      'maestro_id' => 2,
      'curso_id' => 2,
      'alumno_id' => 1,
    ]);
  }
}
