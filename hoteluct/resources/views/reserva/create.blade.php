
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

#contact input[type="text"], input[type="url"], #contact textarea, #contact button[type="submit"] { font:500 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#2699FB;
	padding:25px;
	margin:10px 0;
    width:400px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    
    
}
            </style>
    <title>Reserva</title>
  </head>
  <body>
  <div class="container"> 

<h1>Crear nueva reserva</h1>

<form action="{{'/reserva'}}" method="post" enctype="multipart/form-data" id="contact" >
{{csrf_field()}}

<br>
<fieldset>
<label for="Rut_client">{{'Rut_client'}}</label>
<input type="text" name="Rut_client" id="Rut_client" value="">
</fieldset>
<br>

<fieldset>
<label for="N_hab">{{'N_hab'}}</label>
<input type="text" name="N_hab" id="N_hab" value="">
</fieldset>
<br>
<fieldset>
<label for="fecha_E">{{'fecha_E'}}</label>
<input type="date" name="fecha_E" id="fecha_E" value="">
</fieldset>
<br>
<fieldset>
<label for="fecha_S">{{'fecha_S'}}</label>
<input type="date" name="fecha_S" id="fecha_S" value="">
</fieldset>
<br>
<fieldset>
<label for="total_dias">{{'total_dias'}}</label>
<input type="text" name="total_dias" id="total_dias" value="">
</fieldset>
<br>
<fieldset>
<label for="servicios">{{'servicios'}}</label>
<input type="text" name="servicios" id="servicios" value="">
</fieldset>
<br>
<fieldset>
<label for="costo_dia">{{'costo_dia'}}</label>
<input type="text" name="costo_dia" id="costo_dia" value="">
</fieldset>
<br>
<fieldset>
<label for="costo_total">{{'costo_total'}}</label>
<input type="text" name="costo_total" id="costo_total" value="">
</fieldset>
<br>
<fieldset>
<label for="descuento">{{'descuento'}}</label>
<input type="text" name="descuento" id="descuento" value="">
</fieldset>
<br>
<fieldset>
<label for="costobruto">{{'costobruto'}}</label>
<input type="text" name="costobruto" id="costobruto" value="">
</fieldset>
<br>
<fieldset>
<input type="submit" value="Enviar" class="btn btn-primary" role="button">
<a href="{{ url ('reserva')}}" class="btn btn-primary" role="button">Regresar</a>
</fieldset>

</form>
</div>
</body>
</html>