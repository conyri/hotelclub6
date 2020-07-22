seccion para crear habitaciones

<form action="{{'/cotizacion'}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<br>
<label for="Rut">{{'Rut'}}</label>
<input type="text" name="Rut" id="Rut" value="">
<br>
<label for="nombre">{{'nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="">
<br>
<label for="apellido">{{'apellido'}}</label>
<input type="text" name="apellido" id="apellido" value="">
<br>
<label for="correo">{{'correo'}}</label>
<input type="email" name="correo" id="correo" value="">

<div class="form-group">
    <label for="tipo_hab">tipo_hab</label>
    <select id="tipo_hab" class="form-control" name="tipo_hab" >
        @foreach($habitaciones as $hab)
            <option value="{{$hab['tipo']}}">{{$hab['tipo']}}</option>
        @endforeach
    </select>
</div>

<label for="Fecha_E">{{'Fecha_E'}}</label>
<input type="date" name="Fecha_E" id="Fecha_E" value="">
<br>
<label for="Fecha_S">{{'Fecha_S'}}</label>
<input type="date" name="Fecha_S" id="Fecha_S" value="">
<br>
<label for="cant_per">{{'cant_per'}}</label>
<input type="text" name="cant_per" id="cant_per" value="">
<br>
<label for="adm">{{'adm'}}</label>
<input type="text" name="adm" id="adm" value="">
<br>
<input type="submit" value="Enviar">
<a href="{{ url ('habitaciones')}}">Regresar</a>

</form>