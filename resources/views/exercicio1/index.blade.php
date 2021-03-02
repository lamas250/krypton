<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }


            .content {
                text-align: center;
            }

            .title {
                font-size: 24px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .header {
              display: flex;
              justify-content: space-between;
              margin-bottom: 3rem;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="container">
            <div class="header">
              <p class="title">Listagem Carros</p>
              <a href="{{route('carro.create')}}">
                <button type="button" class="btn btn-info">Novo Carro</button>
              </a>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Modelo</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Cor</th>
                  <th scope="col">Tipo Cilindros</th>
                  <th scope="col">Cilindros</th>
                  <th scope="col">Litragem</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($listaCarros as $value)
                    <tr>
                      <td>{{ucfirst($value->modelo)}}</td>
                      <td>{{ucfirst($value->marca)}}</td>
                      <td>{{ucfirst($value->cor)}}</td>
                      <td>{{ucfirst($value->motor->posicionamento_cilindros)}}</td>
                      <td>{{ucfirst($value->motor->cilindros)}}</td>
                      <td>{{ucfirst($value->motor->litragem)}}</td>
                      <td>
                        <a href="{{route('carro.delete',($value->id))}}">
                          <button type="button" class="btn btn-danger">Danger</button>
                        </a>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </body>
</html>
