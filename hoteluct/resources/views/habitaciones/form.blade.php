{{$Modo=='crear' ? 'Agregar habitaciones':'Modificar Habitaciones'}}
<br>
<label for="tipo">{{'tipo'}}</label>
<input type="text" name="tipo" id="tipo" value="{{isset($habitaciones->tipo)? $habitaciones->tipo:'' }}">
<br>
<label for="diadisp">{{'diadispv'}}</label>
<input type="date" name="diadisp" id="diadisp" value="{{isset($habitaciones->diadisp)? $habitaciones->diadisp:'' }}">
<br>
<label for="info">{{'info'}}</label>
<input type="text" name="info" id="info" value="{{isset($habitaciones->info)? $habitaciones->info:'' }}">
<br>
<label for="cant_p">{{'cant_p'}}</label>
<input type="text" name="cant_p" id="cant_p" value="{{isset($habitaciones->cant_p)? $habitaciones->cant_p:'' }}">
<br>
<label for="precio_dia">{{'precio_dia'}}</label>
<input type="text" name="precio_dia" id="precio_dia" value="{{isset($habitaciones->precio_dia)? $habitaciones->precio_dia:'' }}">
<br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}">
<a href="{{ url ('habitaciones')}}">Regresar</a>