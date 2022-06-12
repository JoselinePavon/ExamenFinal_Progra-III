<?php

namespace App\Http\Controllers;

use App\Models\Empleados;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function readEmpleado()
    {

        $empleados=Empleados::all();

        return view('empleados.ReadRegistrados', compact('empleados'));

    }
}
