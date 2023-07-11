<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */

  public function up()
  {
    Schema::create('relaciones', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('maestro_id');
      $table->unsignedBigInteger('curso_id');
      $table->unsignedBigInteger('alumno_id');
      // Agrega aquí otros campos necesarios para la tabla "relaciones"
      $table->timestamps();

      $table->foreign('maestro_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
      $table->foreign('alumno_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /*
  public function up(): void
  {
    Schema::create('relaciones', function (Blueprint $table) {
      $table->id();
      $table->string('curso_id');
      $table->string('maestro_id');
      $table->string('alumno_id');
      $table->timestamps();
    });
  }
*/


  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('relaciones');
  }
};
