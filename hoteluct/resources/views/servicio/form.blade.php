{{$Modo=='crear' ? 'Agregar servicios':'Modificar servicios'}}
<br>
<label for="Rut_serv">{{'Rut_serv'}}</label>
<input type="text" name="Rut_serv" id="Rut_serv" value="{{isset($servicio->Rut_serv)? $servicio->Rut_serv:'' }}">
<br>
<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="diadisp" value="{{isset($servicio->nombre)? $servicio->nombre:'' }}">
<br>
<label for="Descripts">{{'Descripts'}}</label>
<input type="text" name="Descripts" id="Descripts" value="{{isset($servicio->Descripts)? $servicio->Descripts:'' }}">
<br>
<label for="Preciodia_S">{{'Preciodia_S'}}</label>
<input type="text" name="Preciodia_S" id="Preciodia_S" value="{{isset($servicio->Preciodia_S)? $servicio->Preciodia_S:'' }}">
<br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}">
<a href="{{ url ('habitaciones')}}">Regresar</a>