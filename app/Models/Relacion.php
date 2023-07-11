<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
  protected $table = 'relaciones';

  protected $fillable = ['maestro_id', 'curso_id', 'alumno_id'];

  // Relación con el modelo User para el maestro
  public function maestro()
  {
    return $this->belongsTo(User::class, 'maestro_id');
  }

  // Relación con el modelo Curso
  public function curso()
  {
    return $this->belongsTo(Curso::class, 'curso_id');
  }

  // Relación con el modelo User para el alumno
  public function alumno()
  {
    return $this->belongsTo(User::class, 'alumno_id');
  }
}
