<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Commerce')</title>

    @include('libraries.styles')
</head>
<body class="d-flex flex-column min-vh-100">
    
    @include('components.Navbar')

    <main class="flex-grow-1 home-body-content py-4">
        @yield('content')
    </main>

    @include('components.main.footer')

    @include('libraries.scripts')

</body>
</html>
