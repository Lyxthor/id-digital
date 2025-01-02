<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digiid</title>

    @vite('resources/css/app.css')
    @stack('styles')
</head>
<body>
    <body class="bg-gray-100 min-h-screen">
        <div class="flex h-screen">
            @include('partials.sidebar')
            @yield('content')
        </div>
    </body>

    @stack('scripts')
</body>
</html>
