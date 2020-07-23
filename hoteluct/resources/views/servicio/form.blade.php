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
	background:#98FB26;
	padding:25px;
	margin:10px 0;
    width:400px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    
    
}

            </style>
    <title>Servicio</title>
  </head>
  <body>

  <div class="container"> 
<h1>{{$Modo=='crear' ? 'Agregar servicios':'Modificar servicios'}}</h1>
<br>
<div id="contact">
<fieldset>
<label for="Rut_serv">{{'Rut_serv'}}</label>
<input type="text" name="Rut_serv" id="Rut_serv" value="{{isset($servicio->Rut_serv)? $servicio->Rut_serv:'' }}">
</fieldset>
<br>
<fieldset>
<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="diadisp" value="{{isset($servicio->nombre)? $servicio->nombre:'' }}">
</fieldset>
<br>
<fieldset>
<label for="Descripts">{{'Descripts'}}</label>
<input type="text" name="Descripts" id="Descripts" value="{{isset($servicio->Descripts)? $servicio->Descripts:'' }}">
</fieldset>
<br>
<fieldset>
<label for="Preciodia_S">{{'Preciodia_S'}}</label>
<input type="text" name="Preciodia_S" id="Preciodia_S" value="{{isset($servicio->Preciodia_S)? $servicio->Preciodia_S:'' }}">
</fieldset>
<br>
<fieldset>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}" class="btn btn-success mt-0 ml-0" role="button">
<a href="{{ url ('servicio')}}" class="btn btn-success mt-0 ml-0" role="button">Regresar</a>
</fieldset>

</div>
</div>
</body>
</html>