{{$Modo=='crear' ? 'Agregar estado de reserva':'Modificar estado de reserva'}}
<br>
<label for="reserva">{{'reserva'}}</label>
<input type="text" name="reserva" id="reserva" value="{{isset($est_resv->reserva)? $est_resv->reserva:'' }}">
<br>
<label for="estado">{{'estado'}}</label>
<input type="text" name="estado" id="estado" value="{{isset($est_resv->estado)? $est_resv->estado:'' }}">
<br>
<label for="admin">{{'admin'}}</label>
<input type="text" name="admin" id="admin" value="{{isset($est_resv->admin)? $est_resv->admin:'' }}">
<br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}">
<a href="{{ url ('est_resv')}}">Regresar</a>