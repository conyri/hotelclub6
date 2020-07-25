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
            #contact input[type="text"], input[type="url"], #contact textarea, #contact button[type="submit"] { font:500 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#98FB26;
	padding:25px;
	margin:10px 0;
    width:400px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    
    
}
.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

            </style>
    <title>Reserva</title>
  </head>
  <body>
  <div class="container"> 

<h1>{{$Modo=='crear' ? 'Agregar reserva':'Modificar reserva'}}</h1>
<br>
<div id="contact">
<label for="rut_client">{{'rut_client'}}</label>
<input type="text" name="rut_client" id="rut_client" value="{{isset($reservasa->rut_client)? $reservasa->Rut_client:'' }}">
<br>
<label for="tipo_Salon">{{'tipo_Salon'}}</label>
<input type="text" name="tipo_Salon" id="tipo_Salon" value="{{isset($reservasa->tipo_Salon)? $reservasa->tipo_Salon:'' }}">
<br>
<label for="fecha_E">{{'fecha_E'}}</label>
<input type="date" name="fecha_E" id="fecha_E" value="{{isset($reservasa->fecha_E)? $reservasa->fecha_E:'' }}">
<br>
<label for="fecha_S">{{'fecha_S'}}</label>
<input type="date" name="fecha_S" id="fecha_S" value="{{isset($reservasa->fecha_S)? $reservasa->fecha_S:'' }}">
<br>
<label for="dias_total">{{'dias_total'}}</label>
<input type="text" name="dias_total" id="dias_total" value="{{isset($reservasa->dias_total)? $reservasa->dias_total:'' }}">
<br>
<label for="valor_dia">{{'valor_dia'}}</label>
<input type="text" name="valor_dia" id="valor_dia" value="{{isset($reservasa->valor_dia)? $reservasa->valor_dia:'' }}">
<br>
<label for="coto_total">{{'costo_total'}}</label>
<input type="text" name="coto_total" id="coto_total" value="{{isset($reservasa->coto_total)? $reservasa->coto_total:'' }}">
<br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}" class="btn btn-success mt-0 ml-0" role="button">
<a href="{{ url ('reservasa')}}" class="btn btn-success mt-0 ml-0" role="button">Regresar</a>

</div>
</div>
</body>
</html>