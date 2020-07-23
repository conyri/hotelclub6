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
<label for="Rut_client">{{'Rut_client'}}</label>
<input type="text" name="Rut_client" id="Rut_client" value="{{isset($reserva->Rut_client)? $reserva->Rut_client:'' }}">
<br>
<label for="N_hab">{{'N_hab'}}</label>
<input type="text" name="N_hab" id="N_hab" value="{{isset($reserva->N_hab)? $reserva->N_hab:'' }}">
<br>
<label for="fecha_E">{{'fecha_E'}}</label>
<input type="date" name="fecha_E" id="fecha_E" value="{{isset($reserva->fecha_E)? $reserva->fecha_E:'' }}">
<br>
<label for="fecha_S">{{'fecha_S'}}</label>
<input type="date" name="fecha_S" id="fecha_S" value="{{isset($reserva->fecha_S)? $reserva->fecha_S:'' }}">
<br>
<label for="total_dias">{{'total_dias'}}</label>
<input type="text" name="total_dias" id="total_dias" value="{{isset($reserva->total_dias)? $reserva->total_dias:'' }}">
<br>
<label for="servicios">{{'servicios'}}</label>
<input type="text" name="servicios" id="servicios" value="{{isset($reserva->servicios)? $reserva->servicios:'' }}">
<br>
<label for="costo_total">{{'costo_total'}}</label>
<input type="text" name="costo_total" id="costo_total" value="{{isset($reserva->costo_total)? $reserva->costo_total:'' }}">
<br>
<label for="descuento">{{'descuento'}}</label>
<input type="text" name="descuento" id="descuentor" value="{{isset($reserva->descuento)? $reserva->descuento:'' }}">
<br>
<label for="costobruto">{{'costobruto'}}</label>
<input type="text" name="costobruto" id="costobruto" value="{{isset($reserva->costobruto)? $reserva->costobruto:'' }}">
<br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}" class="btn btn-success mt-0 ml-0" role="button">
<a href="{{ url ('reserva')}}" class="btn btn-success mt-0 ml-0" role="button">Regresar</a>

</div>
</div>
</body>
</html>