@extends('layouts.app')


@section('title', 'Registro por usuario')
@section('content')
    <div class="container">
        <div class="row justify-content-center font-bold block mx-auto">
            <div class="col-md-10 ml-5">
                <h2 class="text-center mt-5" style="color: #9a86a4"><i class="fas fa-user-friends"></i>  Registro de empleados</h2>
<br>
                <table class="table table-light table-bordered table-hover text-center font-bold">
                    <thead >
                    <tr style="color: #9a86a4">
                        <th>Nombre del empleado</th>
                        <th>Nombre del usuario</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->nombre_empleado}}</td>
                            <td>{{\App\Models\User::find($empleado->usuario)->name}}</td>
                        </tr>
                    @endforeach

                    </tbody>


                </table>

                <a class="btn btn-outline-info mb-3"href="{{url('/read/Vista')}}">
                    <i> <-Pagina Anterior </i>
                </a>
            </div>
        </div>
    </div>
@endsection
