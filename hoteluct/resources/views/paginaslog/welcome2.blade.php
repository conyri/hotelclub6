@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel club UCT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: url("/imagenes/u0.jpg");
                background-size: cover ;
                color: white;
                font-family: 'comic sans', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .full-height {
                height: 100;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                text-decoration: none;
            }
            .top-right1 {
                position: absolute;
                right: 1400px;
                top: 18px;
                border: 3px black groove;
                background-color: #E12200;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase; 
                
            }

            .content {
                text-align: center;
                font-size: 50px;
                color: #FFFFFF;
            }

            .title {
                font-size: 100px;
                color: #040404;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
               letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;        
                border: 3px black groove;
                background-color: #D8E04F;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
    
    </div>
        <div class=" full-height flex-center">     
        </div>
        
       

                <div class="card-body">
                    <h4 >Bienvenid@  {{ auth()->user()->name }} </h4>
                    </div>
                   
        <br>
        <br>
        <br>
        <br> 
        <div class="content">                 
            <h1>HOTEL CLUB UCT</h1>               
        </div> 
        <br>
        <br>
        <br>   
            <div class="links flex-center ">                                                            
                <a href="/paginaslog/habitacion2">Habitacion</a>
                <a href="/paginaslog/restaurant2">RESTAURANT</a> 
                <a href="/paginaslog/eventos2">EVENTOS Y SALONES</a>  
                <a href="/paginaslog/fitnessclub2">SERVICIOS</a> 
                <a href="/home">PERFIL</a>         
            </div>    
        
    </body>
</html>
@endsection