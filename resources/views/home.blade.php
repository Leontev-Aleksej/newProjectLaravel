<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
<header>
    <div class="logo">Логотип сайта</div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('array') }}">Массивы</a></li>
        </ul>
    </nav>
</header>

<div id="content">
    <h1>Добро пожаловать на наш сайт!</h1>
    <img src="/resources/img/9oiaEmBgRh8.jpg" alt="Картинка">
    <p>
        Это текст о рыбах. Рыбы — это водные позвоночные, которые могут жить в пресной или соленой воде. 
        Они имеют множество форм и размеров, от крошечных гуппи до огромных акул. 
        Рыбы играют важную роль в экосистемах и являются важным ресурсом для людей.
    </p>
</div>

<footer>
    <p>&copy; 2024 Леонтьев Алексей Евгеньевич</p>
</footer>
</body>
</html>