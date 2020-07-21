Inicio (despiegue de datos)

<a href="{{ url ('est_resv/create')}}">Agregar</a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>RESERVA</th>
            <th>ESTADO</th>
            <th>ADM</th>
            <th>acciones</th>

        </tr>
    </thead>

    <tbody>
    @foreach($est_resv as $esta)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$esta->reserva}}</td>
            <td>{{$esta->estado}}</td>
            <td>{{$esta->admin}}</td>
            <td>
            
            <a href="{{url('/est_resv/'.$esta->id.'/edit')}}">
            Editar</a>
                
            | 
                
            <form method="post" action="{{url('/est_resv/'.$esta->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
    @endforeach
    </tbody>




</table>