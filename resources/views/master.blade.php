<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Télémaque</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  


</head>
<body>
    <header>
        <nav>
            <div class="logo">
                
            
            <img src="{{ asset('img/logo.svg') }}" alt="logo">
            <h1>Télémaque</h1>
            </div>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('films.list') }}">Liste des films</a></li>
                <li><a href="{{ route('films.create') }}">Ajouter un film</a></li>
            </ul>
        </nav>

        <div class="search-container">
            <form class="form" method="POST">
              
                <input type="text" name="search" placeholder="Rechercher...">
                <button type="submit">Rechercher</button>
        </div>

     

    </header>
    
    <main>
        @yield('content')
    </main>
    

    <footer>
        <p>&copy; {{ date('Y') }} Télémac</p>
    </footer>
</body>
</html>

