@extends('master')

@section('title', 'Home')

@section('content')
<div class="card mb-4 shadow-sm p-4">
    <h1 class="card-title">Bienvenue sur MonSite 🚀</h1>
    <p class="card-text">
        Ceci est la page d’accueil de notre projet Laravel. Naviguez vers les autres pages pour découvrir le formulaire de contact et la page À propos.
    </p>
    <a href="{{ route('contact') }}" class="btn btn-primary">Nous contacter</a>
</div>

<div class="card mb-4 shadow-sm p-4">
    <h2>Nos fonctionnalités</h2>
    <ul>
        <li>Gestion des formulaires avec POST et validation</li>
        <li>Pages dynamiques avec Blade et layout master</li>
        <li>Design moderne et responsive avec Bootstrap</li>
        <li>Navigation simple et intuitive</li>
    </ul>
</div>

<div class="card mb-4 shadow-sm p-4">
    <h2>Notre équipe</h2>
    <p>
        Une équipe de développeurs passionnés par Laravel et le développement web moderne.
    </p>
</div>

<div class="card mb-4 shadow-sm p-4">
    <h2>Prêt à commencer ?</h2>
    <p>
        Contactez-nous dès maintenant pour découvrir comment nous pouvons vous aider à développer votre projet web.
    </p>
    <a href="{{ route('contact') }}" class="btn btn-primary">Contactez-nous</a>
</div>
@endsection('content')