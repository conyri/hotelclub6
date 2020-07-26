@extends('layouts.app')

@section('content')
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
                color: white ;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 10;
            }

            #lateral { width: 200px; }

            .container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

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
    <title>Cotiza</title>
  </head>

  <body>

<div class="container"> 
<h1>Agrega una cotizacion nueva</h1> 
<form action="{{'/coti2'}}" method="post" enctype="multipart/form-data"id="contact" >
{{csrf_field()}}

<fieldset>
<label for="Rut">{{'Rut'}}</label>
<input type="text" disabled="disabled" name="Rut" id="Rut" value="{{ auth()->user()->rut }}">
</fieldset>
<br>

<fieldset>
<label for="nombre">{{'nombre'}}</label>
<input type="text" disabled="disabled" name="nombre" id="nombre" value="{{ auth()->user()->name }}">
</fieldset>
<br>

<fieldset>
<label for="apellido">{{'apellido'}}</label>
<input type="text" name="apellido" id="apellido" value="">
</fieldset>
<br>

<fieldset>
<label for="correo">{{'correo'}}</label>
<input type="email" name="correo" id="correo" value="">
</fieldset>
<br>
<fieldset >
<div id="lateral">
<label for="tipo_hab">tipo_hab</label>
<select id="tipo_hab" class="form-control" name="tipo_hab">
    <option>Junior Suite</option>  
    <option>Superior King</option>
    <option>Superior Twin</option>
    <option>Standard King</option>
    <option>Standard Twin</option>
    </select>
</div>
</fieldset>
<br>
<fieldset>
<label for="Fecha_E">{{'Fecha_E'}}</label>
<input type="date" name="Fecha_E" id="Fecha_E" value="">
</fieldset>
<br>
<fieldset>
<label for="Fecha_S">{{'Fecha_S'}}</label>
<input type="date" name="Fecha_S" id="Fecha_S" value="">
</fieldset>
<br>
<fieldset>
<label for="cant_per">{{'cant_per'}}</label>
<input type="text" name="cant_per" id="cant_per" value="">
</fieldset>
<br>
<fieldset>
<label for="adm">{{'adm'}}</label>
<input type="text" name="adm" id="adm" value="">
</fieldset>
<br>
<fieldset>
<input type="submit" value="Enviar" class="btn btn-primary" role="button">
<a href="{{ url ('coti2')}}" class="btn btn-primary" role="button">Regresar</a>
</fieldset>
</form>
</div>
</body>
</html>
@endsection