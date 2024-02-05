@extends('master')

@section('title', 'Accueil')

@section('content')
<div class="container">
    <h1>Bienvenue sur Télémaque, le répértoire de vos films</h1>
    <p>C'est votre premier port d'escale pour découvrir de nouveaux films ou pour ajouter vos films préférés à notre liste.</p>
    <div class="container">
        <a href="{{ route('films.list') }}" >Voir la liste des films</a>
        <a href="{{ route('films.create') }}">Ajouter un film</a>
    </div>
</div>
@endsection
