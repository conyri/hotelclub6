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
    <title>Servicio</title>
  </head>
  <body>
  <div class="uper"> 
<h1>Servicios</h1>


<table class="table table-info table-bordered">

    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Servicio</th>
            <th>Informacion</th>
           <th>Precio por dia</th>
            <th colspan="4" width=5% ><h1 class= "display-6">ACCION</h1></th>
            

        </tr>
    </thead>

    <tbody>
    @foreach($servicio as $ser)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$ser->Rut_serv}}</td>
            <td>{{$ser->nombre}}</td>
            <td>{{$ser->Descripts}}</td>
            <td>{{$ser->Preciodia_S}}</td>
            <td>
            
            <a href="{{url('/servicio/'.$ser->id.'/edit')}}" class="btn btn-success mt-0 ml-0">
            Editar</a>
                
            
                
            <form method="post" action="{{url('/servicio/'.$ser->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>

<a href="{{ url ('servicio/create')}}" type="button" class="btn btn-success mt-0 ml-0">AGREGAR</a>

<a class="btn btn-primary" href="/principaladmin" role="button">ATRAS</a>

</div> 
</body>
</html>