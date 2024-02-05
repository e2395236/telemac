@extends('master')

@section('title', 'Détails du Film')

@section('content')
<div class="container">
    @isset($film)
        <h2>{{ $film->title }}</h2>
        <div class="film-details">
            <p><strong>Description :</strong> {{ $film->description }}</p>
            <p><strong>Année de sortie :</strong> {{ $film->year }}</p>
            <p><strong>Genre :</strong> {{ $film->genre }}</p>
            <p><strong>Directeur :</strong> {{ $film->director }}</p>
     
        </div>
        <a href="{{ route('films.list') }}">Retour à la liste des films</a>
    @else
        <p>Ce film n'existe pas.</p>
    @endisset
</div>
@endsection
