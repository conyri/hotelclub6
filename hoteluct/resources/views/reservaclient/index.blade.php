
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
    <title>Reservas</title>
  </head>
<body>
<div class="uper"> 
<h1>Reservas</h1>

<label for="reserva"><h1 >{{'Rut cliente'}}</h1 ></label>
<label ><h1 >{{ auth()->user()->rut }}</h1 ></label>

  <br> 





<a href="{{ url ('reserva2/create')}}" type="button" class="btn btn-success mt-0 ml-0">AGREGAR</a>

<a class="btn btn-primary" href="/home" role="button">ATRAS</a>
</div> 
</body>
</html>