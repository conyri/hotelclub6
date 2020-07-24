
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script type="text/javascript">
    function calcular_total() {
	    importe_total = 0
	    $(".importe_linea").each(
		    function(index, value) {
			    importe_total = importe_total + eval($(this).val());
		    }
	    );
	    $("#total").val(importe_total);
    }

    function calcular() {
        importe_total = 0
	    $(".importe").each(
		    function(index, value) {
			    importe_total = $('#valor1').val() * $('#valor2').val();

		    }
	    );
	    $("#total1").val(importe_total);
	};

    </script>
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
<fieldset >
<div id="lateral">
<label for="N_hab">{{'N_hab'}}</label>
<select id="N_hab" class="form-control" name="N_hab">
        @foreach($habitaciones as $hab)
            <option value="{{$hab['id']}}">{{$hab['id']}}</option>
        @endforeach
</select>
</div>
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
<input type="text" name="total_dias" id="valor1" value="0" class="importe">
</fieldset>
<br>
<fieldset >
<div id="lateral">
<label for="servicios">{{'servicios'}}</label>
<select id="servicios" class="form-control" name="servicios">
        @foreach($servicio as $ser)
            <option value="{{$ser['nombre']}}">{{$ser['nombre']}}</option>
        @endforeach
</select>
</div>
</fieldset>
<br>
<fieldset >
<div id="lateral">
<label for="costo_dia">{{'costo_dia'}}</label>
<select id="valor2" class="form-control importe" name="costo_dia" >
        @foreach($habitaciones as $hab)
            <option value="{{$hab['precio_dia']}}" >{{$hab['precio_dia']}}</option>
        @endforeach
</select>
</div>
</fieldset>
<br>
<fieldset>
<label for="costo_total">{{'costo_total'}}</label>
<input type="text" name="costo_total" id="total1" value="0" class="importe importe_linea">
<input type="button" value="Calcular" onclick=" calcular()"/>
</fieldset>
<br>
<fieldset>
<label for="descuento">{{'descuento'}}</label>
<input type="text" name="descuento" id="descuento" value="0" class="importe_linea">
</fieldset>
<br>
<fieldset>
<label for="costobruto">{{'costobruto'}}</label>
<input type="text" name="costobruto" id="total" value="0">
<input type="button" value="Calcular" onclick="calcular_total()"/>
</fieldset>
<br>
<fieldset>


</fieldset>
<fieldset>
<input type="submit" value="Enviar" class="btn btn-primary" role="button">
<a href="{{ url ('reserva')}}" class="btn btn-primary" role="button">Regresar</a>
</fieldset>

</form>
</div>
</body>
</html>