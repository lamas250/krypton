<?php

namespace App\Http\Controllers\Api;

use App\Atividades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class AtividadesController extends Controller
{
  public function index()
  {
    $dados = Storage::disk('local')->get('atividades.json');
    $dados = json_decode($dados, true);

    if (!Atividades::find(1)) {
      foreach ($dados as $atividade) {
        Atividades::create($atividade);
      }
    }
    $atividades = Atividades::orderBy('hora', 'ASC')->paginate(5);

    return $atividades;
  }
}
