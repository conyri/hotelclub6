
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
    <title>Reservas de salones</title>
  </head>
<body>
<div class="uper"> 
<h1>Reservas de salones</h1>

<td><img width="500" height="400" src="/imagenes/salon.jpg"/></td>
<td><img width="500" height="400" src="/imagenes/salon2.jpg"  /></td>

<br>
<a href="{{ url ('reservasa/create')}}" type="button" class="btn btn-success mt-0 ml-0">AGREGAR</a>

<a class="btn btn-primary" href="/home" role="button">ATRAS</a>
</div> 
</body>
</html>