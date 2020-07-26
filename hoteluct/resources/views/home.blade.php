
@extends('layouts.app')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <style>
            html, body {
                background: url("/imagenes/u0.jpg");
                background-size: cover ;
                color: black ;
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

</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Home</div>
                @role('admin')

                <a href="/principaladmin" class="btn btn-info" >Panel ADM</a>
                <div class="card-body">
                    <h4>Bienvenid@  {{ auth()->user()->name }} </h4>
                    </div>


                @else
  

                  
                    <div class="card-body">
                    <h4>Bienvenid@  {{ auth()->user()->name }} </h4>
                    </div>

                
                
                
                
            
                <div class="links flex-center ">   

                
                <a href="/reserva2" class="btn btn-primary">RESERVA</a> 
                <a href="/coti2" class="btn btn-primary">COTIZACION</a>  

                       
            </div> 
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@endrole
@endsection
