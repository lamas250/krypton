<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividades extends Model
{
  protected $table = 'atividades';
  protected $fillable = ['atividade', 'hora'];
}
