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
            <th>RESERVA</th>
            <th>ESTADO</th>
            <th>ADM</th>
            <th colspan="4" width= 5%  ><h2 class= "display-6">ACCION</h2></th>

        </tr>
    </thead>

    <tbody>
    @foreach($est_resv as $esta)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$esta->reserva}}</td>
            <td>{{$esta->estado}}</td>
            <td>{{$esta->admin}}</td>
            <td>
            
            <a href="{{url('/est_resv/'.$esta->id.'/edit')}}" class="btn btn-success mt-0 ml-0">
            Editar</a>
            <form method="post" action="{{url('/est_resv/'.$esta->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>

<a href="{{ url ('est_resv/create')}}" type="button" class="btn btn-success mt-0 ml-0">AGREGAR</a>

<a class="btn btn-primary" href="/principaladmin" role="button">ATRAS</a>
</div> 
</body>
</html>