@extends('template')

@section('titrePage')
    Information sur le Manga
@endsection

@section('contenu')
    <div class="align-content-center card">
        <header class="card-header">
            <h5 class="card-header-title">
                Titre : {{ $film->titre }}
                <a class="btn btn-primary offset-lg-8 offset-md-6 offset-4" href="{{ route('films.index') }}">Retour à la sélection</a>
            </h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Année de sortie : {{ $film->anneeSortie }}</p>
                <p>Catégorie : {{ $categorie->libelle}}</p>
                <hr/>
                <p>Description : {{ $film->description }}</p>
            </div>
        </div>
    </div>

@endsection
