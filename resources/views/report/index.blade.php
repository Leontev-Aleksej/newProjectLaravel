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
    <div style = "display: flex; flex-wrap: wrap; gap: 10px">
         @foreach ($array as $card)
            <div>
                <img src="./img/art.jpg" alt="карточка">
                {{-- <img src="{{ $card['path'] }}" alt="карточка"> --}}
                <h2>{{ $card['numbre'] }}. {{ $card['timestamps'] }}</h2>
                <p>{{ $card['description'] }} р.</p>
            </div>
        @endforeach
    </div>
</div>

<footer>
    <p>&copy; 2024 Леонтьев Алексей Евгеньевич</p>
</footer>
</body>
</html>