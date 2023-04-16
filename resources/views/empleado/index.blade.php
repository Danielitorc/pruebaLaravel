@extends('layouts.app')
@section('content')
<div class="container">
    
    @if(Session::has('mensaje'))
      
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('mensaje') }}
                <script>
                //Al actualizar los daros, Si hay un mensaje de confirmacion, lo enviara a la pantalla del listado de empleados
                //Y lo eliminara pasados los 4.5 segundos
                let confirm = document.querySelector('.alert');
                confirm.innerHTML = '';
                confirm.style.display = 'block';
                confirm.innerHTML += '<li>La acción se realizó correctamente</li>';
                setTimeout(() => {
                confirm.style.display = 'none';
            }, 4500);
            </script>
        </div>
    @endif
  
    <a href="{{ url('empleado/create') }}" class="btn btn-success" >Registrar Nuevo Empleado</a>

    <br>
    <br>

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
                    <td>

                        <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning" >Editar</a>

                        |

                        <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit"
                            class="btn btn-danger"
                            onclick="return confirm('¿Desea borrar este registro?')" 
                            value="Borrar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection