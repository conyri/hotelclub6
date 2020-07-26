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
    <title>Cotiza</title>
  </head>
  <body>
 <div class="uper"> 
   

<font size=6>LISTADO DE COTIZACIONES</font> 
@if(session()->get('success'))      
    <p class="text-right">         
        {{ session()->get('success') }}        
    </p>   
    @endif   

<table class="table table-info table-bordered">

    <thead class="thead-dark">
        <tr>
            <th >#</th>
            <th >RUT </th>
            <th >NOMBRE</th>
            <th >APELLIDO</th>
            <th > CORREO</th>
            <th >TIPO DE HABITACION</th>
            <th >TIPO DE SALON</th>
            <th >FECHA DE ENTRADA</th>
            <th >FECHA DE SALIDA</th>
            <th >PERSONAS</th>
            <th >ADM</th>
                   
           <th colspan="4" width=5% ><h1 class= "display-6">ACCION</h1></th>
            

        </tr>
    </thead>

    <tbody>
    @foreach($cotizacion as $cot)
        <tr>
            <td >{{$loop->iteration}}</td>
            <td>{{$cot->Rut}}</td>
            <td>{{$cot->nombre}}</td>
            <td>{{$cot->apellido}}</td>
            <td>{{$cot->correo}}</td>
            <td>{{$cot->tipo_hab}}</td>
            <td>{{$cot->tipo_salon}}</td>
            <td>{{$cot->Fecha_E}}</td>
            <td>{{$cot->Fecha_S}}</td>
            <td>{{$cot->cant_per}}</td>
            <td>{{$cot->adm}}</td>
                      
                   
            
         
            
            <td><a href="{{url('/cotizacion/'.$cot->id.'/edit')}}" class="btn btn-success mt-0 ml-0">
            Editar</a></td>
                
            <td> 
                
            <form method="post" action="{{url('/cotizacion/'.$cot->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>
<a href="{{ url ('cotizacion/create')}}" type="button" class="btn btn-success mt-0 ml-0">AGREGAR</a>

<a class="btn btn-primary" href="/principaladmin" role="button">ATRAS</a>

</div> 
</body>
</html>
 
