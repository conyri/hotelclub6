seccion para crear habitaciones

<form action="{{'/cotizacion'}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

@include('cotizacion.form',['Modo'=>'crear'])

</form>