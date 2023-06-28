<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <!-- Aplication CSS -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>    
    </head>

    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id ="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.jpeg" alt="Allsites Events">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav item">
                            <a href="/" class="nav-link"><ion-icon name="home-outline"></ion-icon></a>
                        </li>
                        <li class="nav-item">
                            <a href="/events" class="nav-link">Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="/events/create" class="nav-link">New Events</a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            @yield('content')

            <footer>
                <a href="https://github.com/albertomaffeii/Api-Laravel-10" target="_blank" >Allsites IT | Laravel v{{ Illuminate\Foundation\Application::VERSION }} | (PHP v{{ PHP_VERSION }})</a>
            </footer>        
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>