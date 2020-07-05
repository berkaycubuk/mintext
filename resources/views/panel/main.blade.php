<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/panel.css') }}">
</head>
<body>
    <header class="header">
        <nav class="header-nav">
            <a class="nav-item" href="/">Home</a>
            <a class="nav-item" href="/panel/pages">Pages</a>
            <a class="nav-item" href="/panel/posts">Posts</a>
            <a class="nav-item" href="/panel/menus">Menus</a>
            <a class="nav-item" href="/panel/settings">Settings</a>
            <a class="nav-item" href="/logout">Logout</a>
        </nav>
    </header>
    <main class="main">
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>
