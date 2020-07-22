{{$Modo=='crear' ? 'Agregar reserva':'Modificar reserva'}}
<br>
<label for="Rut_client">{{'Rut_client'}}</label>
<input type="text" name="Rut_client" id="Rut_client" value="{{isset($reserva->Rut_client)? $reserva->Rut_client:'' }}">
<br>
<label for="N_hab">{{'N_hab'}}</label>
<input type="text" name="N_hab" id="N_hab" value="{{isset($reserva->N_hab)? $reserva->N_hab:'' }}">
<br>
<label for="fecha_E">{{'fecha_E'}}</label>
<input type="date" name="fecha_E" id="fecha_E" value="{{isset($reserva->fecha_E)? $reserva->fecha_E:'' }}">
<br>
<label for="fecha_S">{{'fecha_S'}}</label>
<input type="date" name="fecha_S" id="fecha_S" value="{{isset($reserva->fecha_S)? $reserva->fecha_S:'' }}">
<br>
<label for="total_dias">{{'total_dias'}}</label>
<input type="text" name="total_dias" id="total_dias" value="{{isset($reserva->total_dias)? $reserva->total_dias:'' }}">
<br>
<label for="servicios">{{'servicios'}}</label>
<input type="text" name="servicios" id="servicios" value="{{isset($reserva->servicios)? $reserva->servicios:'' }}">
<br>
<label for="costo_total">{{'costo_total'}}</label>
<input type="text" name="costo_total" id="costo_total" value="{{isset($reserva->costo_total)? $reserva->costo_total:'' }}">
<br>
<label for="descuento">{{'descuento'}}</label>
<input type="text" name="descuento" id="descuentor" value="{{isset($reserva->descuento)? $reserva->descuento:'' }}">
<br>
<label for="costobruto">{{'costobruto'}}</label>
<input type="text" name="costobruto" id="costobruto" value="{{isset($reserva->costobruto)? $reserva->costobruto:'' }}">
<br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar ':'Modificar '}}">
<a href="{{ url ('reserva')}}">Regresar</a>