<h1>{{ $moodIdentifier }}</h1>

<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
    <br>
    <br>
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" value="{{ isset($empleado->apellidoPaterno)?$empleado->apellidoPaterno:'' }}" id="apellidoPaterno">
    <br>
    <br>
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" name="apellidoMaterno" value="{{ isset($empleado->apellidoMaterno)?$empleado->apellidoMaterno:'' }}" id="apellidoMaterno">
    <br>
    <br>
    <label for="Edad">Edad</label>
    <input type="text" name="Edad" value="{{ isset($empleado->Edad)?$empleado->Edad:'' }}" id="Edad">
    <br>
    <br>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo">
    <br>
    <br>
    <input type="submit" value="Guardar Datos">

    <a href="{{ url('empleado/') }}">Regresar</a>