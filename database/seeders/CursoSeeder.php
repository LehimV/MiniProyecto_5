<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {
    Curso::create([
      'name_curso' => 'Curso 1',
      'level' => 'L1',
    ]);

    Curso::create([
      'name_curso' => 'Curso 2',
      'level' => 'L2',
    ]);

    Curso::create([
      'name_curso' => 'Curso 3',
      'level' => 'L3',
    ]);

    Curso::create([
      'name_curso' => 'Curso 4',
      'level' => 'L4',
    ]);

    Curso::create([
      'name_curso' => 'Curso 5',
      'level' => 'L5',
    ]);
  }
}
