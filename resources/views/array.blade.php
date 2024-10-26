@extends('layouts.main')
@section('content')
<nav>
    <ul>
        <li><a href="{{ route('home') }}">Главная</a></li>
        <li><a href="{{ route('array') }}">Массивы</a></li>
        <li><a href="{{ route('report.index') }}">Репорты</a></li>
    </ul>
</nav>
<div id="content">
    <div style = "display: flex; flex-wrap: wrap; gap: 10px">
         @foreach ($array as $card)
            <div>
                <img src="./img/art.jpg" alt="карточка">
                {{-- <img src="{{ $card['path'] }}" alt="карточка"> --}}
                <h2>{{ $card['id'] }}. {{ $card['title'] }}</h2>
                <p>{{ $card['price'] }} р.</p>
            </div>
        @endforeach
    </div>
</div>
@endsection()