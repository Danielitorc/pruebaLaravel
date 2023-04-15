<form action="{{ url('/empleado') }}" method="post" >
    @csrf
    @include('empleado.form',['moodIdentifier' => 'Crear Registro'])
</form>