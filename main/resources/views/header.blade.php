<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Set Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Set IE EDGE compatibility -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Set title -->
    <title>RL INDIA</title>
    <!-- SEO -->
    <meta name="author" content="Ayush Mukherjee">
    <meta name="description" content="Internet home of the largest Rocket League&reg; community in Asia.">
    {{-- Import CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ @asset('css/main.css') }}">
    {{-- Import Font --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,900" rel="stylesheet">
    <script src="{{ @asset('js/main.js') }}"></script>
</head>
<body>
    <header>
        <div class="container">
            {{-- Left Side Navigation --}}
            {{-- <div class="left">
                <a href="/">home</a>
                <a href="#">blog</a>
                <a href="#">tournaments</a>
            </div> --}}
            {{-- Logo --}}
            <div class="main">
                <img src="{{ @asset("img/logo.png") }}" alt="RL India Logo" class="logo">
                RL INDIA
            </div>
            {{-- Right side Navigation --}}
            {{-- <div class="right">
                <a href="#">about</a>
                <a href="#">donate</a>
                <a href="#">contact</a>
            </div> --}}
            {{-- <div class="mob" onclick="toggleMenu()">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div> --}}
            {{-- <div class="mobile">
                <a href="/">home</a>
                {{-- <a href="#">blog</a> --}}
                {{-- <a href="#">tournaments</a>
                <a href="#">about</a>
                <a href="#">donate</a>
                <a href="#">contact</a> --}}
                {{-- <button class="btn btn-primary">Login</button>
            </div> --}}
        </div>
        {{-- Login/Logout button --}}
        {{-- <div class="login">
            <button class="btn btn-primary">Login</button>
        </div> --}}
    </header>
        @yield('content')
    <footer>
        &copy; 2019 RL India All Rights Reserved. &copy; 2019 Psyonix, Inc. All Rights to Rocket League Reserved.
    </footer>
</body>
</html>