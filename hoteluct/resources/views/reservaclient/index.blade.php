
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
    <title>Reservas</title>
  </head>
<body>
<div class="uper"> 
<h1>Reservas</h1>



<table class="table table-info table-bordered">

    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>RUT CLIENTE</th>
            <th>N° de HABITACION</th>
            <th>FECHA DE ENTRADA</th>
            <th>FECHA DE SALIDA</th>
            <th>TOTAL DIAS</th>
            <th>SERVICIOS</th>
            <th>COSTO POR DIA</th>
            <th>COSTO TOTAL</th>
            <th>DESCUENTO</th>
            <th>COSTOBRUTO</th>
            <th colspan="4" width= 5%  ><h5 class= "display-6">ACCION</h5></th>
            

        </tr>
    </thead>

    <tbody>
    @foreach($reserva as $rev)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$rev->Rut_client}}</td>
            <td>{{$rev->N_hab}}</td>
            <td>{{$rev->fecha_E}}</td>
            <td>{{$rev->fecha_S}}</td>
            <td>{{$rev->total_dias}}</td>
            <td>{{$rev->servicios}}</td>
            <td>{{$rev->costo_dia}}</td>
            <td>{{$rev->costo_total}}</td>
            <td>{{$rev->descuento}}</td>
            <td>{{$rev->costobruto}}</td>
            <td>
            
            <a href="{{url('/reserva/'.$rev->id.'/edit')}}" class="btn btn-success mt-0 ml-0">
            Editar</a>
                
            
                
            <form method="post" action="{{url('/reserva/'.$rev->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>


<a href="{{ url ('reserva2/create')}}" type="button" class="btn btn-success mt-0 ml-0">AGREGAR</a>

<a class="btn btn-primary" href="/home" role="button">ATRAS</a>
</div> 
</body>
</html>