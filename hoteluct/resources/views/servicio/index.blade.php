Inicio (despiegue de datos)

<a href="{{ url ('servicio/create')}}">Agregar</a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Tipo de habitacion</th>
            <th>dia disponible</th>
            <th>informacion</th>
            <th>cantidad de personas</th>
            <th>precio por dia</th>
            <th>acciones</th>

        </tr>
    </thead>

    <tbody>
    @foreach($servicio as $ser)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$ser->Rut_serv}}</td>
            <td>{{$ser->nombre}}</td>
            <td>{{$ser->Descripts}}</td>
            <td>{{$ser->Preciodia_S}}</td>
            <td>
            
            <a href="{{url('/servicio/'.$ser->id.'/edit')}}">
            Editar</a>
                
            | 
                
            <form method="post" action="{{url('/servicio/'.$ser->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>