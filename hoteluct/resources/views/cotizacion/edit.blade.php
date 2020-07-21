<form  action="{{url('/cotizacion/'.$cotizacion->id) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH') }}
@include('cotizacion.form',['Modo'=>'editar'])

</form>