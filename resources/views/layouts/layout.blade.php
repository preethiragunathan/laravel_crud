<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Application')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <ul>
               
                <li><a href="{{ route('students.index') }}">Students</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
