<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'E-Library APP')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">


    <!-- Header -->
        <header class="bg-blue-600 text-white p-4">
            <div class="container mx-auto">
                <h1 class="text-2xl font-bold">@yield('heading')</h1>
                @include('components.navbar')
            </div>
        </header>

    <!-- Main -->
        <main class="container mx-auto my-8 p-4 bg-white rounded shadow">
            @yield('content')
        </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center p-4 mt-8">
        <p>&copy; {{date('Y')}} E-Library App</p>
    </footer>
</body>
</html>
