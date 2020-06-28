<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="header-title">Berkay Çubuk</h1>
            <nav class="header-nav">
                <a class="nav-item" href="/">Home</a>
                <a class="nav-item" href="/about">About</a>
                <a class="nav-item" href="/contact">Contact</a>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>

        </footer>
    </div>
</body>
</html>
