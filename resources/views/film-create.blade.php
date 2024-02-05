@extends('master')

@section('title', 'Ajouter un Film')

@section('content')
<div class="container">
    <h2>Ajouter un Nouveau Film</h2>
    <form action="{{ route('films.store') }}" method="POST">
        @csrf <!-- Protection CSRF -->
        
        <div class="form-group">
            <label for="title">Titre du film</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="year">Année de sortie</label>
            <input type="number" class="form-control" id="release_year" name="release_year" required>
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>

        <div class="form-group">
            <label for="director">Réalisateur</label>
            <input type="text" class="form-control" id="director" name="director" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Ajouter le Film</button>
    </form>
</div>
@endsection


