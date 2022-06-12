<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $table = "registro_de_empleados";
    public $timestamps = false;
    protected $fillable = ["codigo_empleado","nombre_empleado","numero_telefono","correo","direccion","departamento",'usuario'];

    protected $primaryKey = "codigo_empleado";
}
