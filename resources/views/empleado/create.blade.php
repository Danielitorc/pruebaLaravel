/* Formulario para crear el reegistrio de empleados */

<form action="{{ url('/empleado') }}" method="post" >
    //Llave de seguridad que valida que los datos provengan del mismo sistema
    @csrf
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <br>
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" id="apellidoPaterno">
    <br>
    <br>
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" name="apellidoMaterno" id="apellidoMaterno">
    <br>
    <br>
    <label for="Edad">Edad</label>
    <input type="text" name="Edad" id="Edad">
    <br>
    <br>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" id="Correo">
    <br>
    <br>
    <input type="submit" value="Guardar Datos">
</form>