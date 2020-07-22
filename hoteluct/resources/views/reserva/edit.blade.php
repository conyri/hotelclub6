<form  action="{{url('/reserva/'.$reserva->id) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH') }}
@include('reserva.form',['Modo'=>'editar'])


</form>