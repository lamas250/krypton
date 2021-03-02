<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
  protected $table = 'carros';
  protected $fillable = ['marca', 'modelo', 'cor', 'motor_id'];

  public function motor()
  {
    return $this->belongsTo(Motores::class);
  }
}
