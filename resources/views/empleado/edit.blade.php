Formulario de edicion de empleado

<form action="{{ url('/empleado/'.$empleado->id ) }}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}

@include('empleado.form', ['modo'=>'editar']);

</form>