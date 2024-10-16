<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="logo">Логотип сайта</div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2024 Леонтьев Алексей Евгеньевич</p>
    </footer>
</body>
</html>