@extends('layouts.app')


@section('title', 'CRUD')
@section('content')
    <div class="container">
        <div class="row justify-content-center font-bold block mx-auto">
            <div class="col-md-10 ml-5">
                <h2 class="text-center mt-5" style="color: #9a86a4"><i class="fas fa-users"></i> Empleados</h2>


                <a class="btn btn-outline-info mb-3  "href="{{url('/Create/empleados')}}">
                    <i class="fas fa-user-plus"> Agregar Empleado</i>
                </a>

                <br>
                <table class="table table-light table-bordered table-hover text-center font-bold">
                    <thead >
                    <tr style="color: #9a86a4">
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Correo Electronico</th>
                        <th>Direccion</th>
                        <th>Departamento</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->codigo_empleado}}</td>
                            <td>{{$empleado->nombre_empleado}}</td>
                            <td>{{$empleado->numero_telefono}}</td>
                            <td>{{$empleado->correo}}</td>
                            <td>{{$empleado->direccion}}</td>
                            <td>{{$empleado->departamento}}</td>
                            <td>
                                <div class="btn-group">

                                    <a  class="btn btn-outline-info mb-2 mr-2" href="{{route('edit', $empleado->codigo_empleado)}}">
                                        <i class="fas fa-user-edit "></i>

                                    </a>

                                    <form action="{{route('delete', $empleado->codigo_empleado)}}" method="POST" class="#formulario-eliminar">
                                        @csrf @method('DELETE')

                                        <button type="submit" onclick="deleteAlert(event)" class="btn btn-outline-danger mb-2 mr-2" >
                                            <i class="fas fa-user-times"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>


                        </tr>
                    @endforeach

                    </tbody>

                </table>


            </div>
        </div>
    </div>
@endsection

