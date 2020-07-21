<form  action="{{url('/habitaciones/'.$habitaciones->id) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH') }}
@include('habitaciones.form',['Modo'=>'editar'])

</form>