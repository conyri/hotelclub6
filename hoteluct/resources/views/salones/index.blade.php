<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
            html, body {
                background: url("/imagenes/u0.jpg");
                background-size: cover ;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            </style>
    <title>Estado</title>
  </head>
<body>
<div class="uper"> 
<h1>Estado de reserva</h1>



<table class="table table-info table-bordered">

    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>TIPO DE SALON</th>
            <th>VALOR POR DIA</th>
            <th>DESCRIPCION</th>

        </tr>
    </thead>

    <tbody>
    @foreach($salones as $sal)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$sal->tipo_Salon}}</td>
            <td>{{$sal->valor_dia}}</td>
            <td>{{$sal->descripcion}}</td>
            <td>
            
        </tr>
    @endforeach
    </tbody>




</table>

<a href="{{ url ('est_resv/create')}}" type="button" class="btn btn-success mt-0 ml-0">AGREGAR</a>
<a class="btn btn-primary" href="/cotizacion/create" role="button">COTIZAR SALON</a>
<a class="btn btn-primary" href="/eventos" role="button">ATRAS</a>
</div> 
</body>
</html>