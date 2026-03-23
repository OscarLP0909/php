<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">
    <nav class="w-full bg-white border-b border-gray-200">
        <div class="mx-auto max-w-6xl px-4 py-3 flex items-center justify-between">
            <a href="/" class="text-2xl font-semibold">Ejercicio 2</a>
            <ul class="flex items-center gap-6 text-sm font-medium">
                <li><a href="/" class="hover:text-blue-600">Welcome</a></li>
                <li><a href="/about" class="hover:text-blue-600">Sobre mí</a></li>
                <li><a href="/sports" class="hover:text-blue-600">Deportes</a></li>
            </ul>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>