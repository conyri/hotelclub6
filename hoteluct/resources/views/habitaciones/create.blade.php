seccion para crear habitaciones

<form action="{{'/habitaciones'}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

@include('habitaciones.form',['Modo'=>'crear'])

</form>