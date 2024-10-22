<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <script src="https://kit.fontawesome.com/2842fd03de.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        @include('partials.sidebar-home')
        <main class="content">
            @yield('content')
        </main>
    </div>

    <script>
        // Sidebar Hamburger menu + X-button
        document.querySelector('.hamburger').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.top-bar').classList.toggle('active', !document.querySelector('.sidebar')
                .classList.contains('active'));
        });
    </script>
</body>

</html>
