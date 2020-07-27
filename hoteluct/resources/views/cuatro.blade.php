<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HABITACIONES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <img src="/imagenes/u0.jpg"  width="100%" height="500" />
        <style>
            html, body {
                background-color: #E9D886;
                color: #E0C84F;
                font-family: 'Nunito', sans-serif;
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
                position: absolute;
                top: 100px;
                right: 200px;
            }

            .top-right {
                position: absolute;
                right: 100px;
                top: 380px;
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
            .uper{
                position: absolute;
                top: 18px;
                right:1435px;
                border: 3px black groove;
                background-color: #D8E04F;
            }
            .imagenes{
                position: relative;
            }
            .td, tr{
                top: 700px;
                right:1000px;
                
            }
            .button {
                font: bold 13px Arial;
                text-decoration: none;
                background-color: #EEEEEE;
                color: #333333;
                padding: 10px 15px 10px 10px;
                border-top: 1px solid #CCCCCC;
                border-right: 1px solid #333333;
                border-bottom: 1px solid #333333;
                border-left: 1px solid #CCCCCC;
            }
            .egt{
                position: absolute;
                top: 600px;
                right:300px;

            }
            .hab{
                font: bold 20px Arial;
                position: absolute;
                top: 300px;
                right:500px;
                color: #FFFFFF
            }

        </style>
    </head>
    <body>
   
        <div class="content full-height position-ref">                 
            <h1>HOTEL CLUB UCT</h1>               
        </div> 
        <div class="hab">                 
            <h1>HABITACIONES</h1>               
        </div>
        <div class="links flex-center top-right ">                                                            
                <a href="/dos">SUPERIOR KING</a> 
                <a href="/tres">SUPERIOR TWIN</a>  
                <a href="/uno">JUNIOR SUITE</a> 
                <a href="/cinco">STANDARD TWIN </a>            
            </div>
            <table class="egt">
                <tr>
                <td><img width="500" height="400" src="/imagenes/a04.jpg"  /></td>
                <br><br>
                <td colspan="2"></td>
                <td><font color="black" ><p ><h1>Standard King</h1> 
                <br>    ⦁ Una cama extra grande
                <br>    ⦁ Área de estar
                <br>    ⦁ Conexión inalámbrica a internet de cortesía
                <br>    ⦁ Servicio de habitación las 24 horas
                <br>    ⦁ Aire acondicionado automático e individual
                <br>    ⦁ Televisión por cable
                <br>    ⦁ Caja de seguridad
                <br>    ⦁ Discado directo internacional
                <br>    ⦁ Servicio de mensajería
                <br>    ⦁ Amenidades de baño
                <br>    ⦁ Mini bar
                <br>    ⦁ Radio reloj
                <br>    ⦁ Secador de cabello
                </p></font>
                <a href="coti2/create" class="button" >  COTIZAR </a>
                <a href="/" class="button">INICIO</a>
                </td>
                </tr>
                <tr>
                <td>  <br><br> </td>
                </tr>
                <tr>
                <td>  <br><br> </td>
                </tr>
            
            </table>
    </body>

