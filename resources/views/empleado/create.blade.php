Formulario de creacion de empleados


<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf 

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre">
<br>
<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
<br>
<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
<br>
<label for="Correo">Correo</label>
<input type="text" name="Correo" id="Correo">
<br>
<label for="Foto">Foto</label>
<input type="file" name="Foto" id="Foto">
<br>
<input type="submit" value="Guardar datos">

</form>