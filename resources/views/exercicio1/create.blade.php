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
            <form action="{{route('carro.store')}}" method="post">
              @csrf
              <div class="form-group">
                <label>Modelo</label>
                <input type="text" class="form-control" name="modelo">
              </div>
              <div class="form-group">
                <label>Marca</label>
                <input type="text" class="form-control" name="marca">
              </div>
              <div class="form-group">
                <label>Cor</label>
                <input type="text" class="form-control" name="cor">
              </div>
              <div class="form-group">
                <label>Posicionamento dos Cilindros</label>
                <input type="text" class="form-control" name="posicionamento_cilindros">
              </div>
              <div class="form-group">
                <label>Quantos Cilindros</label>
                <input type="text" class="form-control" name="cilindros">
              </div>
              <div class="form-group">
                <label>Listragem</label>
                <input type="text" class="form-control" name="litragem">
              </div>
              <div class="form-group">
                <label>Observação</label>
                <input type="text" class="form-control" name="observacao">
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
    </body>
</html>
