<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function home () {
        return view('home');
    }


    public function index(){
        // Ici, tu récupérerais les films depuis la base de données
        $films = [
            (object) ['id' => 1, 'title' => 'Magnolia', 'description' => 'Les vies entrelacées de personnages en quête de bonheur et de pardon à San Fernando Valley.', 'year' => 1999, 'genre' => 'Drame', 'director' => 'Paul Thomas Anderson'],
            (object) ['id' => 2, 'title' => 'Cape Fear', 'description' => 'Un avocat et sa famille sont harcelés par un criminel vengeur à la sortie de prison.', 'year' => 1991, 'genre' => 'Thriller', 'director' => 'Martin Scorsese'],
            (object) ['id' => 3, 'title' => 'Paris, Texas', 'description' => 'Un homme réapparaît mystérieusement après quatre ans d\'absence et tente de renouer avec son fils et sa femme.', 'year' => 1984, 'genre' => 'Drame', 'director' => 'Wim Wenders'],
            (object) ['id' => 4, 'title' => 'Wings of Desire', 'description' => 'Un ange surveillant Berlin se trouve aspiré par la beauté de la vie humaine et souhaite devenir mortel.', 'year' => 1987, 'genre' => 'Fantaisie', 'director' => 'Wim Wenders'],
            (object) ['id' => 5, 'title' => 'Brazil', 'description' => 'Dans un état totalitaire dystopique, un bureaucrate tente de corriger une erreur administrative et devient un ennemi de l\'État.', 'year' => 1985, 'genre' => 'Science-fiction', 'director' => 'Terry Gilliam'],
            (object) ['id' => 6, 'title' => 'Code Unknown', 'description' => 'Une série de récits entrelacés explorant les relations humaines dans la société contemporaine multiculturelle.', 'year' => 2000, 'genre' => 'Drame', 'director' => 'Michael Haneke'],
        ];
        return view('films-list', ['films' => $films]);
    }
    

    // Affiche le formulaire de création de films
    public function create(){
        return view('film-create');
    }

    // Stocke un nouveau film
    public function store(Request $request){
        // Valider et stocker le film en base de données
        // Puis rediriger vers l'index des films avec un message
        return redirect()->route('films.list')->with('success', 'Film ajouté avec succès!');
    }

    // Affiche un film spécifique
    public function show($id){
    
        $film = collect([
            (object) ['id' => 1, 'title' => 'Magnolia', 'description' => 'Les vies entrelacées de personnages en quête de bonheur et de pardon à San Fernando Valley.', 'year' => 1999, 'genre' => 'Drame', 'director' => 'Paul Thomas Anderson'],
            (object) ['id' => 2, 'title' => 'Cape Fear', 'description' => 'Un avocat et sa famille sont harcelés par un criminel vengeur à la sortie de prison.', 'year' => 1991, 'genre' => 'Thriller', 'director' => 'Martin Scorsese'],
            (object) ['id' => 3, 'title' => 'Paris, Texas', 'description' => 'Un homme réapparaît mystérieusement après quatre ans d\'absence et tente de renouer avec son fils et sa femme.', 'year' => 1984, 'genre' => 'Drame', 'director' => 'Wim Wenders'],
            (object) ['id' => 4, 'title' => 'Wings of Desire', 'description' => 'Un ange surveillant Berlin se trouve aspiré par la beauté de la vie humaine et souhaite devenir mortel.', 'year' => 1987, 'genre' => 'Fantaisie', 'director' => 'Wim Wenders'],
            (object) ['id' => 5, 'title' => 'Brazil', 'description' => 'Dans un état totalitaire dystopique, un bureaucrate tente de corriger une erreur administrative et devient un ennemi de l\'État.', 'year' => 1985, 'genre' => 'Science-fiction', 'director' => 'Terry Gilliam'],
            (object) ['id' => 6, 'title' => 'Code Unknown', 'description' => 'Une série de récits entrelacés explorant les relations humaines dans la société contemporaine multiculturelle.', 'year' => 2000, 'genre' => 'Drame', 'director' => 'Michael Haneke'],
        ])->firstWhere('id', $id);
    
        if (!$film) {
            abort(404); // Affiche une erreur 404
        }
    
        return view('film-show', ['film' => $film]);
    }
    



}