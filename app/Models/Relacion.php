<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
  protected $table = 'relaciones';

  protected $fillable = ['maestro_id', 'curso_id', 'alumno_id'];

  public function curso()
  {
    return $this->belongsTo(Curso::class, 'curso_id');
  }


  public function maestro()
  {
    return $this->belongsTo(User::class, 'maestro_id');
  }

  public function alumno()
  {
    return $this->belongsTo(User::class, 'alumno_id');
  }
}
