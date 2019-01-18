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
    <link rel="stylesheet" type="text/css" href="@assets('css/main.css')">
</head>
<body>
    <header>
        {{-- Left Side Navigation --}}
        <div class="left"></div>
        {{-- Logo --}}
        <div class="main"></div>
        {{-- Right side Navigation --}}
        <div class="right"></div>
        {{-- Login/Logout button --}}
        <div class="login"></div>
    </header>
    <div class="container-fluid">
        @yield('content')
    </div>
    <footer></footer>
</body>
</html>