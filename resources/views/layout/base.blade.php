<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    @stack('scripts')
</head>
<body>

    <header>
        @sectionMissing('navigation')
            @include('layout.navigation', ['menu' => ['Home', 'About', 'Services', 'Contact']])
        @endif
        @hasSection('navigation')
            @yield('navigation')
        @endif
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
