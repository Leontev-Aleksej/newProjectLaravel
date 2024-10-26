@extends('layouts.main')
@section('content')

<form method="POST" action="{{route('reports.update', $report->id)}}">
    @csrf
    @method('put')
    <input name="number" type="text">
    <textarea name="description"></textarea>
    <button type="submit">Обновить</button>
  </form>

@endsection()