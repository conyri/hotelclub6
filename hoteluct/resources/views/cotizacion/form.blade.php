{{$Modo=='crear' ? 'Agregar cotizacion':'Modificar cotizacion'}}
<br>
<label for="Rut">{{'Rut'}}</label>
<input type="text" name="Rut" id="Rut" value="{{isset($cotizacion->Rut)? $cotizacion->Rut:'' }}">
<br>
<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="{{isset($cotizacion->nombre)? $cotizacion->nombre:'' }}">
<br>
<label for="apellido">{{'apellido'}}</label>
<input type="text" name="apellido" id="apellido" value="{{isset($cotizacion->apellido)? $cotizacion->apellido:'' }}">
<br>
<label for="correo">{{'correo'}}</label>
<input type="email" name="correo" id="correo" value="{{isset($cotizacion->correo)? $cotizacion->correo:'' }}">
<br>
<label for="tipo_hab">{{'tipo_hab'}}</label>
<input type="text" name="tipo_hab" id="tipo_hab" value="{{isset($cotizacion->tipo_hab)? $cotizacion->tipo_hab:'' }}">
<br>
<label for="Fecha_E">{{'Fecha_E'}}</label>
<input type="date" name="Fecha_E" id="Fecha_E" value="{{isset($cotizacion->Fecha_E)? $cotizacion->Fecha_E:'' }}">
<br>
<label for="Fecha_S">{{'Fecha_S'}}</label>
<input type="date" name="Fecha_S" id="Fecha_S" value="{{isset($cotizacion->Fecha_S)? $cotizacion->Fecha_S:'' }}">
<br>
<label for="cant_per">{{'cant_per'}}</label>
<input type="text" name="cant_per" id="cant_per" value="{{isset($cotizacion->cant_per)? $cotizacion->cant_per:'' }}">
<br>
<label for="adm">{{'adm'}}</label>
<input type="text" name="adm" id="adm" value="{{isset($cotizacion->adm)? $cotizacion->adm:'' }}">
<br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}">
<a href="{{ url ('habitaciones')}}">Regresar</a>