seccion para crear estado de reserva

<form action="{{'/est_resv'}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

@include('est_resv.form',['Modo'=>'crear'])

</form>