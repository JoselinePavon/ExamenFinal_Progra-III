@extends('layouts.app')
@section('title', 'Register')

@section('content')
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-3xl text-center font-bold"> Registrase </h1>

        <form class="mt-4" method="POST" action="" >
            @csrf
            @error('name')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
        text-ted 600 p-2"> {{$message}} </p>
            @enderror

            <input type="name" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" id="name" name="name">

            @error('email')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
        text-ted 600 p-2"> {{$message}} </p>
            @enderror

            <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo Electronico" id="email" name="email">

            @error('password')
            <p class="border border-red-500 rounded-md bg-red-100 w-full
        text-ted 600 p-2"> {{$message}} </p>
            @enderror

            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" id="password" name="password">

            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
        text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Confirmar Contraseña" id="password_confirmation" name="password_confirmation">



            <button type="submit" class="rounded-md bg-purple-400 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-purple-600 ">
                Registrarse </button>

        </form>

    </div>
@endsection
