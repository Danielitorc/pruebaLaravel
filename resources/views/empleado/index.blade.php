//Aqui se mostrara la lista de empleados
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Edad</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->apellidoPaterno }}</td>
                <td>{{ $empleado->apellidoMaterno }}</td>
                <td>{{ $empleado->Edad }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>Editar | Borrar</td>
            </tr>
        @endforeach
    </tbody>
</table> 