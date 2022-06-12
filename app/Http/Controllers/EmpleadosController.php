<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{

    public function read()
    {

        $empleados=Empleados::all();

        return view('layouts.read', compact('empleados'));
    }

    public function create()
    {
        $empleados = Empleados::all();
        return view('layouts.empleados', compact('empleados'));
    }

    public function save(Request $request)
    {

        $data = $this->validate($request, [

            'codigo_empleado' => 'Required|string|max:20|unique:registro_de_empleados',
            'nombre_empleado' => 'Required|string|max:255',
            'numero_telefono' => 'Required|string|max:255|',
            'correo' => 'Required|string|max:255',
            'direccion' => 'Required|string|max:100',
            'departamento'=>'Required|string|max:255',


        ]);

        $create_empleado = Empleados::create([
            'codigo_empleado' => $data['codigo_empleado'],
            'nombre_empleado' => $data['nombre_empleado'],
            'numero_telefono' => $data['numero_telefono'],
            'correo' => $data['correo'],
            'direccion' => $data['direccion'],
            'departamento' => $data['departamento'],
            'usuario' => $request->user()->id,


        ]);

        return redirect('/read/Vista')->with('Guardado', "Datos del empleado registrados");
    }

    //para formulario editar
    public function edit(Empleados $empleados)
    {


        return view ('layouts.update', compact('empleados'));

    }



    //para editar usuario
    public function update(Request $request, Empleados $empleado)
    {
        $validation = $this->validate($request, [

            'nombre_empleado' => 'Required|string|max:255',
            'numero_telefono' => 'Required|string|max:255|',
            'correo' => 'Required|string|max:255',
            'direccion' => 'Required|string|max:100',
            'departamento'=>'Required|string|max:255',

        ]);
        $empleado->update( [

                'nombre_empleado' => $validation['nombre_empleado'],
                'numero_telefono' => $validation['numero_telefono'],
                'correo' => $validation['correo'],
                'direccion' => $validation['direccion'],
                'departamento' => $validation['departamento'],


            ]
        );
        return redirect('/read/Vista')->with('Editar', 'ok');
    }



    //para eliminar usuario
    public function delete($codigo_empleado)
    {
        Empleados::destroy($codigo_empleado);

        return back()->with('empleadoDestroy', 'Empleado Eliminado');
    }


}
