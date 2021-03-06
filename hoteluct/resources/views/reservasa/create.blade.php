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
    function resta() {
        importe_total = 0
	    $(".importem").each(
		    function(index, value) {
			    importe_total = $('#total').val() - $('#resta1').val();

		    }
	    );
	    $("#total2").val(importe_total);
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

<form action="{{'/reservasa'}}" method="post" enctype="multipart/form-data"  >
{{csrf_field()}}

<div id="contact">
<label for="rut_client">{{'rut cliente'}}</label>
<input type="text" name="rut_client" id="rut_client" value="{{ auth()->user()->rut }}">
<br>
<div id="lateral">
<label for="tipo_salon">{{'tipo_salon'}}</label>
<select id="tipo_salon" class="form-control" name="tipo_salon">
    <option>Matrimonio</option>  
    <option>Seminario</option>
    <option>Reunion</option>
    <option>Cumpleaños</option>
    <option>Graduaciones</option>
    </select>
</div>
<label for="fecha_E">{{'fecha_E'}}</label>
<input type="date" name="fecha_E" id="fecha_E" value="">
<br>
<label for="fecha_S">{{'fecha_S'}}</label>
<input type="date" name="fecha_S" id="fecha_S" value="">
<br>
<label for="dias_total">{{'dias_total'}}</label>
<input type="text" name="dias_total" id="valor1" value="">
<br>
<label for="valor_dia">{{'valor_dia'}}</label>
<select id="valor2" class="form-control importe_linea" name="valor_dia">
        @foreach($salones as $sal)
            <option value="{{$sal['valor_dia']}}">{{$sal['tipo_Salon']}},valor {{$sal['valor_dia']}}  </option>
        @endforeach
</select>
<label for="coto_total">{{'costo_total'}}</label>
<input type="text" name="coto_total" id="total1" class="importe importe_linea">
<input type="button" value="Calcular" onclick="calcular()"/>
<br>
</fieldset>
<br>
<fieldset>
<input type="submit" value="Enviar" class="btn btn-primary" role="button">
<a href="{{ url ('reservasa')}}" class="btn btn-primary" role="button">Regresar</a>
</fieldset>

</form>
</div>
</body>
</html>


@endsection