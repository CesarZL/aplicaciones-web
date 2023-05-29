<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevStagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
        <!--ENCABEZADO DE LA PAGINA -->
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    Devstagram
                </h1>

                @auth
                <!--Navegacion -->
                <nav class="flex gap-2 items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a class="font-bold text-gray-600 text-sm" aria-current="page">
                                Hola: <span class="font-normal"> {{auth()->user()->username}}</span>
                            </a>
                            <form method="POST" action={{route('logout')}}>
                                @csrf
                                <button type="submit" class="font-bold uppercase text-gray-600  text-sm">Log out</button>
                            </form>
                        </div>
                    </div>
                </nav>                   
                @endauth

                @guest
                    <!--Navegacion -->
                <nav class="flex gap-2 items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('login') }}" class="font-bold uppercase text-gray-600 text-sm" aria-current="page">Log In</a>
                            <a href="{{ route('register') }}" class="font-bold uppercase text-gray-600 text-sm">Sign Up</a>
                        </div>
                    </div>
                </nav>
                @endguest


                
            </div>
        </header>
        <!--Contenido para cada una de las vistas-->

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center  text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>

        <!--Pie de pagina -->
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Devstagram UPV - Todos los derechos reservados {{now()->year}}
        </footer>       
    </body>
</html>
