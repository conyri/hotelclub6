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
    <title>Cotiza</title>
  </head>
  <body>
  <div class="container"> 
<h1>{{$Modo=='crear' ? 'Agregar cotizacion':'Modificar cotizacion'}}</h1>
<br>

<div id="contact">
<label for="Rut">{{'Rut'}}</label>
<input type="text" name="Rut" id="Rut" value="{{isset($cotizacion->Rut)? $cotizacion->Rut:'' }}">
<br>
<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="{{isset($cotizacion->nombre)? $cotizacion->nombre:'' }}">
<br>
<label for="apellido">{{'apellido'}}</label>
<input type="text" name="apellido" id="apellido" value="{{isset($cotizacion->apellido)? $cotizacion->apellido:'' }}">
<br>
<label for="correo">{{'correo'}}</label>
<input type="email" name="correo" id="correo" value="{{isset($cotizacion->correo)? $cotizacion->correo:'' }}">
<br>
<label for="tipo_hab">{{'tipo_hab'}}</label>
<input type="text" name="tipo_hab" id="tipo_hab" value="{{isset($cotizacion->tipo_hab)? $cotizacion->tipo_hab:'' }}">
<br>
<label for="Fecha_E">{{'Fecha_E'}}</label>
<input type="date" name="Fecha_E" id="Fecha_E" value="{{isset($cotizacion->Fecha_E)? $cotizacion->Fecha_E:'' }}">
<br>
<label for="Fecha_S">{{'Fecha_S'}}</label>
<input type="date" name="Fecha_S" id="Fecha_S" value="{{isset($cotizacion->Fecha_S)? $cotizacion->Fecha_S:'' }}">
<br>
<label for="cant_per">{{'cant_per'}}</label>
<input type="text" name="cant_per" id="cant_per" value="{{isset($cotizacion->cant_per)? $cotizacion->cant_per:'' }}">
<br>
<label for="adm">{{'adm'}}</label>
<input type="text" name="adm" id="adm" value="{{isset($cotizacion->adm)? $cotizacion->adm:'' }}">
<br>
<input class="btn btn-success mt-0 ml-0" role="button" type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}">
<a href="{{ url ('coti2')}}" class="btn btn-success mt-0 ml-0" role="button">Regresar</a>
</div>
</div>
</body>
</html>