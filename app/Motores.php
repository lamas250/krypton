<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motores extends Model
{
  protected $table = 'motores';
  protected $fillable = ['posicionamento_cilindros', 'cilindros', 'litragem', 'observacao'];

  public function carro()
  {
    return $this->hasOne(Carros::class, 'motor_id');
  }
}
