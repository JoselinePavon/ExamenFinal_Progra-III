<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Laravel</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <!--Booptstrap se agrega manualmente-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Para iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://use.fontawesome.com/releases/vVERSION/js/all.js" data-mutate-approach="sync"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Script y links exportacion pdf -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body >

<nav style="background-color: #9a86a4" class="flex py-2 bg-indigo-500 text-white">
    <div class="w-1/2 px-2 py-3 mr-auto">
        <a href="{{route('readEmpleado')}}"  class="font-semibold border-3 border-white
              hover:bg-purple-300 py-2 px-3 rounded-md text-white "><i class="fas fa-user-friends"></i> Registro de empleados por usuario</a>

    </div>

    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
            <li>
            <li class="mx-6">
                <p class="text-xl">Bienvenid@ <b>{{auth()->user()->name}}</b></p>
            </li>

            <a href="{{route('login.destroy')}}"  class="font-bold border-2
              hover:bg-red-500 py-1 px-3 rounded-md bg-red-300 text-white  "> Cerrar Sesión </a>
            </li>

        @else
            <a href="{{route('login.index')}}" class="font-semibold
              hover:bg-purple-300 py-2 px-3 rounded-md text-white"> Iniciar Sesión </a>
            <a href="{{route('register.index')}}"  class="font-semibold border-2 border-white
              hover:bg-purple-300 py-2 px-3 rounded-md text-white"> Registrarse </a>

        @endif
    </ul>

</nav>
@yield('content')

</body>
</html>
