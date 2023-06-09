<h1>{{ $moodIdentifier }}</h1>

@if(count($errors)>0)
    

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

 
@endif

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" 
    class="form-control" 
    name="Nombre" 
    value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" 
    id="Nombre">
</div>

<br>

<div class="form-group">
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" 
    class="form-control" 
    name="apellidoPaterno" 
    value="{{ isset($empleado->apellidoPaterno)?$empleado->apellidoPaterno:old('apellidoPaterno') }}" 
    id="apellidoPaterno">
</div>

<br>

<div class="form-group">
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text"
    class="form-control" 
    name="apellidoMaterno" 
    value="{{ isset($empleado->apellidoMaterno)?$empleado->apellidoMaterno:old('apellidoMaterno') }}" 
    id="apellidoMaterno">
</div>

<br>

<div class="form-group">
    <label for="Edad">Edad</label>
    <input type="text" 
    class="form-control" 
    name="Edad" 
    value="{{ isset($empleado->Edad)?$empleado->Edad:old('Edad') }}" 
    id="Edad">
</div>

<br>

<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text"
    class="form-control" 
    name="Correo" 
    value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" 
    id="Correo">
</div>

<br>

<input class="btn btn-success" type="submit" value="Guardar Datos">

<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>