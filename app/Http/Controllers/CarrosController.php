<?php

namespace App\Http\Controllers;

use App\Carros;
use App\Motores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarrosController extends Controller
{
  public function index()
  {
    $response = Http::get('http://apiintranet.kryptonbpo.com.br/test-dev/exercise-1');

    $data = $response->json();

    if (!Motores::find(1)) {

      foreach ($data['motores'] as $motor) {
        Motores::create($motor);
      }
      foreach ($data['carros'] as $carro) {
        Carros::create($carro);
      }
    }

    $listaCarros = Carros::with('motor')->get();

    return view('exercicio1/index', compact('listaCarros'));
  }

  public function create()
  {
    return view('exercicio1/create');
  }

  public function store(Request $request)
  {
    $data = $request->except('_token');

    $motor = Motores::create([
      'posicionamento_cilindros' => $data['posicionamento_cilindros'],
      'cilindros' => $data['cilindros'],
      'litragem' => $data['litragem'],
      'observacao' => $data['observacao']
    ]);

    $carro = $motor->carro()->create([
      'modelo' => $data['modelo'],
      'marca' => $data['marca'],
      'cor' => $data['cor']
    ]);

    return redirect()->route('carro.index');
  }

  public function delete($id)
  {
    $carro = Carros::find($id);
    Motores::where('id', $carro->id)->delete();

    return redirect()->route('carro.index');
  }
}
