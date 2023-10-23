<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')

</head>

<body class="antialiased bg-gray-100">
    <div class="flex relative" x-data="{ navOpen: false }">
        <!-- NAV -->
        @include('layouts.nav')

        <!-- PAGE CONTENT -->
        <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden m-5 p-1">
            @yield('content')
        </main>
    </div>

</body>

</html>
