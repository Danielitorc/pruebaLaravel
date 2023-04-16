<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados']=Empleado::paginate(1000);
        return view('empleado.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Interfaz que muestra el formulario para crear un nuevo empleado
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validacion de datos, todos deben estar llenos para que se logre insertar en la BD
        $campos = [
            'Nombre' => 'required|string|max:50',
            'apellidoPaterno'=> 'required|string|max:50',
            'apellidoMaterno'=> 'required|string|max:50',
            'Edad'=> 'required|string|max:2',
            'Correo'=> 'required|email',
    ];

    //Agrego los mensajes en dado caso de que el usuario intente guardar datos con campos vacios
    $mensaje=[
        'required' => 'El :attribute es requerido'
    ];

    $this->validate($request, $campos, $mensaje);

        //Elimino el campo del token
        $datosEmpleado = request()->except('_token');
        //Inserto los datos a la BD
        Empleado::insert($datosEmpleado);

        //return response()->json($datosEmpleado);
        return redirect('empleado')->with('mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Interfaz que muestra el formulario con los datos del empleado que se desea modificar
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validacion de datos, todos deben estar llenos para que se logre insertar en la BD
        $campos = [
            'Nombre' => 'required|string|max:50',
            'apellidoPaterno'=> 'required|string|max:50',
            'apellidoMaterno'=> 'required|string|max:50',
            'Edad'=> 'required|string|max:2',
            'Correo'=> 'required|email',
        ];
    
        //Agrego los mensajes en dado caso de que el usuario intente guardar datos con campos vacios
        $mensaje=[
            'required' => 'El :attribute es requerido'
        ];
    
        //Paso los campos que se validaran el mensaje a mostrar
        $this->validate($request, $campos, $mensaje);
        
        $datosEmpleado = request()->except(['_token','_method']);
        Empleado::where('id','=',$id)->update($datosEmpleado);

        $empleado=Empleado::findOrFail($id);
        return redirect('empleado')->with('mensaje','Los datos se han modificado');

        //return view('empleado.edit', compact('empleado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Indico que elimine el registro con el $id 
        Empleado::destroy($id);
        //return redirect('empleado');

        //Redirecciono al listado de empleados y envio mensaje de confirmacion
        return redirect('empleado')->with('mensaje','Empleado Borrado');
    }
}
