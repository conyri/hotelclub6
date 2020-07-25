<form  action="{{url('/reservasa/'.$reservasa->id) }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH') }}
@include('reservasa.form',['Modo'=>'editar'])


</form>