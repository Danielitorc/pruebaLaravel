
<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ $empleado->Nombre }}" id="Nombre">
    <br>
    <br>
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" value="{{ $empleado->apellidoPaterno }}" id="apellidoPaterno">
    <br>
    <br>
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" name="apellidoMaterno" value="{{ $empleado->apellidoMaterno }}" id="apellidoMaterno">
    <br>
    <br>
    <label for="Edad">Edad</label>
    <input type="text" name="Edad" value="{{ $empleado->Edad }}" id="Edad">
    <br>
    <br>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" value="{{ $empleado->Correo }}" id="Correo">
    <br>
    <br>
    <input type="submit" value="Guardar Datos">