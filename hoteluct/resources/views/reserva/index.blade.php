Inicio (despiegue de datos)

<a href="{{ url ('reserva/create')}}">Agregar</a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>RUT</th>
            <th>N° de HABITACION</th>
            <th>FECHA DE ENTRADA</th>
            <th>FECHA DE SALIDA</th>
            <th>TOTAL DE DIAS</th>
            <th>SERVICIOS</th>
            <th>COSTO POR DIA</th>
            <th>COSTO TOTAL</th>
            <th>DESCUENTO</th>
            <th>COSTOBRUTO</th>
            

        </tr>
    </thead>

    <tbody>
    @foreach($reserva as $rev)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$rev->Rut_client}}</td>
            <td>{{$rev->N_hab}}</td>
            <td>{{$rev->fecha_E}}</td>
            <td>{{$rev->fecha_S}}</td>
            <td>{{$rev->total_dias}}</td>
            <td>{{$rev->servicios}}</td>
            <td>{{$rev->costo_dia}}</td>
            <td>{{$rev->costo_total}}</td>
            <td>{{$rev->descuento}}</td>
            <td>{{$rev->costobruto}}</td>
            <td>
            
            <a href="{{url('/reserva/'.$rev->id.'/edit')}}">
            Editar</a>
                
            | 
                
            <form method="post" action="{{url('/reserva/'.$rev->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>