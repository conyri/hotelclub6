Inicio (despiegue de datos)

<a href="{{ url ('habitaciones/create')}}">Agregar</a>

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
    @foreach($habitaciones as $hab)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$hab->tipo}}</td>
            <td>{{$hab->diadisp}}</td>
            <td>{{$hab->info}}</td>
            <td>{{$hab->cant_p}}</td>
            <td>{{$hab->precio_dia}}</td>
            <td>
            
            <a href="{{url('/habitaciones/'.$hab->id.'/edit')}}">
            Editar</a>
                
            | 
                
            <form method="post" action="{{url('/habitaciones/'.$hab->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>