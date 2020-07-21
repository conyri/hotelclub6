Inicio (despiegue de datos)

<a href="{{ url ('cotizacion/create')}}">Agregar</a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>RUT</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CORREO</th>
            <th>TIPO DE HABITACION</th>
            <th>FECHA DE ENTRADA</th>
            <th>FECHA DE SALIDA</th>
            <th>CANTIDAD DE PERSONAS</th>
            <th>ADM</th>
            

        </tr>
    </thead>

    <tbody>
    @foreach($cotizacion as $cot)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$cot->Rut}}</td>
            <td>{{$cot->nombre}}</td>
            <td>{{$cot->apellido}}</td>
            <td>{{$cot->correo}}</td>
            <td>{{$cot->tipo_hab}}</td>
            <td>{{$cot->Fecha_E}}</td>
            <td>{{$cot->Fecha_S}}</td>
            <td>{{$cot->cant_per}}</td>
            <td>{{$cot->adm}}</td>
            <td>
            
            <a href="{{url('/cotizacion/'.$cot->id.'/edit')}}">
            Editar</a>
                
            | 
                
            <form method="post" action="{{url('/cotizacion/'.$cot->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>