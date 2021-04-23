<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projects</title>
</head>

<body>
    <div>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('newproject') }}">New Project</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </nav>
    </div>
    @yield('content')
</body>

</html>