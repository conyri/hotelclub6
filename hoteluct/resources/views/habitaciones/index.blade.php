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
    <title>Habitacion</title>
  </head>
<body>
<div class="uper"> 
<h1>Habitaciones</h1>


<table class="table table-info table-bordered">

    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Tipo de habitacion</th>
            <th>Dia disponible</th>
            <th>informacion</th>
            <th>Personas</th>
            <th>Precio por dia</th>
            <th colspan="4" width= 5%  ><h2 class= "display-6">ACCION</h2></th>

        </tr>
    </thead>

    <tbody>
    @foreach($habitaciones as $hab)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$hab->tipo}}</td>
            <td>{{$hab->diadisp}}</td>
            <td>{{$hab->info}}</td>
            <td>{{$hab->cant_p}}</td>
            <td>{{$hab->precio_dia}}</td>
            <td>
            
            <a href="{{url('/habitaciones/'.$hab->id.'/edit')}}" class="btn btn-success mt-0 ml-0">
            Editar</a>
                
            
                
            <form method="post" action="{{url('/habitaciones/'.$hab->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>
<a href="{{ url ('habitaciones/create')}}" type="button" class="btn btn-success mt-0 ml-0">AGREGAR</a>

<a class="btn btn-primary" href="/principaladmin" role="button">ATRAS</a>
</div> 
</body>
</html>