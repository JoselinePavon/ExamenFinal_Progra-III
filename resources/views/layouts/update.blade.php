@extends('layouts.app')

@section('title', 'Actualizar')

@section('content')
    <div class="container">
        <div class=" row justify-content-center">
            <div class="col-md-7 mt-5 ml-5">

                <!-- Mensaje Flash -->
                @if(session('Guardado'))
                    <div class="alert alert-success">
                        {{ session('Guardado') }}
                    </div>
                @endif

            <!-- Validacion de Errores -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error}} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <form action=" {{ route('actualizar', $empleados->codigo_empleado)}}" method="POST">
                        @csrf @method("PATCH")

                        <div class=" card-header text-center" style="background-color:#9a86a4">
                            <h2 style="color: #FEFBE7"><i class="fas fa-user-edit"></i> Modificar Empleado</h2>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg">
                                    <input type="text" class="form-control" value="{{old('codigo_empleado',$empleados->codigo_empleado)}}"
                                           placeholder="Codigo del empleado" name="codigo_empleado" readonly>
                                </div>

                                <div class="col-lg">
                                    <input type="text" name="nombre_empleado" class="form-control"
                                           value="{{old('nombre_empleado',$empleados->nombre_empleado)}}", placeholder="Nombre del empleado">
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg">
                                    <input type="text" name="numero_telefono" class="form-control " value="{{old('numero_telefono', $empleados->numero_telefono)}}"
                                           placeholder="Telefono">
                                </div>
                                <div class="col-lg">
                                    <input type="text" name="correo" class="form-control " value="{{old('correo',$empleados->correo)}}"
                                           placeholder="Correo Electronico">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg">
                                    <label for="" class="col-2"></label>
                                    <input type="text" name="direccion" class="form-control " value="{{old('direccion',$empleados->direccion)}}"
                                           placeholder="Direccion">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg">
                                    <label for="" class="col-2"></label>
                                    <input type="text" name="departamento" class="form-control " value="{{old('departamento',$empleados->departamento)}}"
                                           placeholder="Departamento">
                                </div>
                            </div>
                            <br>
                            <div class="row form-group">
                                <button id="guardado" type="submit"
                                        class="btn btn-outline-info col-md-4 offset-2 mr-3" onclick="crearEmpleado()"><i
                                        class="fas fa-save"  ></i> Actualizar datos
                                </button>

                                <script>
                                    function crearEmpleado() {
                                        Swal.fire({
                                            position: 'center',
                                            icon: 'success',
                                            title: 'Se ha guardado el empleado',
                                            showConfirmButton: true,
                                            timer: 15000
                                        })
                                    }
                                </script>

                                <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/read/Vista') }}"><i
                                        class="fas fa-ban"></i> Cancelar</a>
                            </div>

                            <br>
                        </div>
                    </form>
                </div>
            </div>
@endsection
