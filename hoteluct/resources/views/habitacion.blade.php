<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HABITACIONES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <img src="/imagenes/u0.jpg"  width="1518" height="500" />
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
                right: 400px;
            }

            .top-right {
                position: absolute;
                right: 350px;
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
                text-align: center;
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
                top: 700px;
                right:200px;

            }

        </style>
    </head>
    <body>
    <div class="uper">
        <a href="/" class="btn btn-primary">  ATRAS </a> 
    </div>   

        <div class="content full-height position-ref">                 
            <h1>HOTEL CLUB UCT</h1>               
        </div> 
        <br>
        <br>
        <br>   
            <div class="links flex-center top-right ">                                                            
                <a href="/restaurant">RESTAURANT</a> 
                <a href="/eventos">EVENTOS Y SALONES</a>  
                <a href="/fitnessclub">SERVICIOS</a> 
                <a href="/">INICIO</a>        
            </div>
            <strong><font color="black" size="4px" align="center" > <h1 >Hermosas habitaciones y suites amuebladas</h1> </font></strong>

            <table class="egt">
                <tr>
                <td><img width="500" height="400" src="/imagenes/a01.jpg"  /></td>
                <br><br>
                <td><img width="500" height="400" src="/imagenes/a02.jpg"  /></td>

                </tr>
                <tr>
                <td><font color="black" ><p ><h1>Junior Suite</h1> <br>La suite premium reúne espacio, lujo y elegancia
                 para crear un verdadero oasis <br> urbano de baño exquisito </p></font>
                 <a href="/uno" class="button" >  DETALLES </a>
                 </td>
                <td><font color="black" ><p ><h1>Superior King</h1> <br> Las habitaciones Superior King poseen una cama extra 
                grande, cálidos detalles en <br> madera  y un lujoso cuarto de baño de mármol.</p></font>
                <a href="/dos" class="button" >  DETALLES </a>
                </td>
                </tr>
                <tr>
                <td>  <br> </td>
                </tr>
                <tr>
                <td><img width="500" height="400" src="/imagenes/a03.jpg"  /></td>
                <br><br>
                <td><img width="500" height="400" src="/imagenes/a04.jpg"  /></td>
                </tr>
                <br><br>
                <tr>
                <td><font color="black" ><p ><h1>Superior Twin</h1> <br>Cada habitación Superior Twin acondicionada de manera perfecta
                 con los cálidos <br> detalles  de madera ofrece una sensibilidad contemporánea mediante comodidades<br> modernas  como Wi-Fi 
                 gratuito, televisor de pantalla plana, mini bar y un cuarto <br>de baño  exquisito con ducha con mampara de vidrio. </p></font>
                 <a href="/tres" class="button" >  DETALLES </a>
                 </td>
                <td><font color="black" ><p ><h1>Standard King</h1> <br>Las habitaciones Standard King han sido diseñadas para ser 
                santuarios <br> de paz y relajación con una cama doble extra grande, dos cómodas <br> sillas de estilo inglés   y 
                un cuarto de baño exquisito.</p></font>
                <a href="/cuatro" class="button" >  DETALLES </a>
                </td>
                </tr>
                <tr>
                <td>  <br></td>
                </tr>
                <br><br>
                <tr>
                <td><img width="500" height="400" src="/imagenes/a05.jpg"  /></td>
                </tr>
                <tr>
                <td><font color="black" ><p ><h1>Standard Twin</h1> <br> Ideal para familias o grupos, nuestras
                 habitaciones <br> Standard Twin combinan la sofisticación clásica y el lujo moderno. Dos <br>camas extra 
                 grandes, un cuarto de baño hermoso <br> con ducha con mampara de vidrio y detalles interiores elegantes
                 conforman<br> el retiro ideal luego de un día de viaje, reuniones y paseos por Santiago..</p></font>
                <a href="/cinco" class="button" >  DETALLES </a></td>
                </tr>
                <tr>
                <td>  <br><br> </td>
                </tr>
                

            </table>
            
        
    </body>
</html>
