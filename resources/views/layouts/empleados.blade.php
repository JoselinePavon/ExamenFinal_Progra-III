@extends('layouts.app')

@section('title', 'Empleado')

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
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <form action="{{ route('save') }}" method="POST">
                        @csrf


                        <div class=" card-header text-center" style="background-color: #9a86a4">
                            <h3 style="color: white"><i class="fas fa-user-plus"></i> Registrar Empleado</h3>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg">
                                    <input type="text" class="form-control" value="{{old('codigo_empleado')}}"
                                           placeholder="Codigo del empleado" name="codigo_empleado">
                                </div>

                                <div class="col-lg">
                                    <input type="text" name="nombre_empleado" class="form-control"
                                           value="{{old('nombre_empleado')}}" placeholder="Nombre del empleado">
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg">
                                    <input type="text" name="numero_telefono" class="form-control " value="{{old('numero_telefono')}}"
                                           placeholder="Telefono">
                                </div>
                                <div class="col-lg">
                                    <input type="text" name="correo" class="form-control " value="{{old('correo')}}"
                                           placeholder="Correo Electronico">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg">
                                    <label for="" class="col-2"></label>
                                    <input type="text" name="direccion" class="form-control " value="{{old('direccion')}}"
                                           placeholder="Direccion">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg">
                                    <label for="" class="col-2"></label>
                                    <input type="text" name="departamento" class="form-control " value="{{old('departamento')}}"
                                           placeholder="Departamento">
                                </div>
                            </div>
                            <br>
                            <div class="row form-group">
                                <button id="guardado" type="submit"
                                        class="btn btn-outline-info col-md-4 offset-2 mr-3" onclick="crearEmpleado()"><i
                                        class="fas fa-save"  ></i> Guardar Empleado
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




