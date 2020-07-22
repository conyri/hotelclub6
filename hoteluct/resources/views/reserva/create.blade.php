seccion para crear reserva

<form action="{{'/reserva'}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<br>
<label for="Rut_client">{{'Rut_client'}}</label>
<input type="text" name="Rut_client" id="Rut_client" value="">
<br>
<label for="N_hab">{{'N_hab'}}</label>
<input type="text" name="N_hab" id="N_hab" value="">
<br>
<label for="fecha_E">{{'fecha_E'}}</label>
<input type="date" name="fecha_E" id="fecha_E" value="">
<br>
<label for="fecha_S">{{'fecha_S'}}</label>
<input type="date" name="fecha_S" id="fecha_S" value="">
<br>
<label for="total_dias">{{'total_dias'}}</label>
<input type="text" name="total_dias" id="total_dias" value="">
<br>
<label for="servicios">{{'servicios'}}</label>
<input type="text" name="servicios" id="servicios" value="">
<br>
<label for="costo_dia">{{'costo_dia'}}</label>
<input type="text" name="costo_dia" id="costo_dia" value="">
<br>
<label for="costo_total">{{'costo_total'}}</label>
<input type="text" name="costo_total" id="costo_total" value="">
<br>
<label for="descuento">{{'descuento'}}</label>
<input type="text" name="descuento" id="descuento" value="">
<br>
<label for="costobruto">{{'costobruto'}}</label>
<input type="text" name="costobruto" id="costobruto" value="">
<br>
<input type="submit" value="Enviar">
<a href="{{ url ('reserva')}}">Regresar</a>

</form>