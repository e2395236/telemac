@extends('master')

@section('title', 'Liste des Films')

@section('content')
<div class="container">
    <h2>Liste des Films</h2>
    <ul>
        @foreach ($films as $film)
            <li><a href="{{ route('films.show', $film->id) }}">{{ $film->title }} ({{ $film->year }})</a></li>
        @endforeach
    </ul>
</div>
@endsection



