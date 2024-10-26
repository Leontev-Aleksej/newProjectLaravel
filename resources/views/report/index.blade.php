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
        @foreach($reports as $report)
      <div class='card'>
        <span class='report_number'>{{$report['number']}}</span>
        <p class='report_description'>{{$report['description']}}</p>
        <form method="POST" action="{{route('reports.destroy', $report->id)}}">
            @method('delete')
            @csrf
            <input type="submit" value="Удалить">
        </form>
      </div>
    @endforeach
    <div>
        <form method="POST" action="{{route('reports.store')}}" class='report'>
            @csrf
            <input name="number" type="text" required>
            <textarea name="description"></textarea>
            <button type="submit">Создать</button>
          </form>
        </div>
    </div>
</div>
@endsection()