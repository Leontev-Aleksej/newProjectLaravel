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
        <div class="logo">Нарушений.Нет</div>
    </header> 
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; Леонтьев Алексей 2024</p>
    </footer>
</body>
</html>