<form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('empleado.form',['moodIdentifier' => 'Editar Datos'])

</form>
