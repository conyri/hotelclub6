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
                margin:0;
            }
            .container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], input[type="url"], #contact textarea, #contact button[type="submit"] { font:500 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#0BF3E3;
	padding:25px;
	margin:10px 0;
    width:400px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    
    
}

            </style>
    <title>Habitacion</title>
  </head>
  <body>

  <div class="container"> 

<h1>{{$Modo=='crear' ? 'Agregar habitación':'Modificar Habitaciones'}}</h1>
<br>
<div id="contact">
<label for="tipo">{{'tipo'}}</label>
<input type="text" name="tipo" id="tipo" value="{{isset($habitaciones->tipo)? $habitaciones->tipo:'' }}">
<br>
<label for="diadisp">{{'diadispv'}}</label>
<input type="date" name="diadisp" id="diadisp" value="{{isset($habitaciones->diadisp)? $habitaciones->diadisp:'' }}">
<br>
<label for="info">{{'info'}}</label>
<input type="text" name="info" id="info" value="{{isset($habitaciones->info)? $habitaciones->info:'' }}">
<br>
<label for="cant_p">{{'cant_p'}}</label>
<input type="text" name="cant_p" id="cant_p" value="{{isset($habitaciones->cant_p)? $habitaciones->cant_p:'' }}">
<br>
<label for="precio_dia">{{'precio_dia'}}</label>
<input type="text" name="precio_dia" id="precio_dia" value="{{isset($habitaciones->precio_dia)? $habitaciones->precio_dia:'' }}">
<br>
<input class="btn btn-success mt-0 ml-0" type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}">
<a href="{{ url ('habitaciones')}}" class="btn btn-success mt-0 ml-0">Regresar</a>

</div>
</div>
</body>
</html>