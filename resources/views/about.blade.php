@extends('layouts.master')

@section('title', 'À propos')

@section('content')
<div class="card mb-4 shadow-sm p-4">
    <h1 class="card-title">À propos de MonSite 🚀</h1>
    <p class="card-text">
        Bienvenue sur notre site Laravel ! Cette page utilise le même style que la page d’accueil avec des cartes et des boutons.
    </p>
    <a href="{{ route('contact') }}" class="btn btn-primary">Nous contacter</a>
</div>

<div class="card mb-4 shadow-sm p-4">
    <h2>Notre mission</h2>
    <p>
        Fournir des solutions web modernes et faciles à maintenir. Qualité, simplicité et performance sont nos priorités.
    </p>
</div>

<div class="card mb-4 shadow-sm p-4">
    <h2>Notre équipe</h2>
    <p>
        Une équipe de développeurs passionnés par Laravel et le développement web moderne, travaillant pour créer des sites performants et attractifs.
    </p>
</div>

<div class="card mb-4 shadow-sm p-4">
    <h2>Nos valeurs</h2>
    <ul>
        <li>Qualité du code et bonnes pratiques</li>
        <li>Design moderne et responsive</li>
        <li>Expérience utilisateur optimale</li>
        <li>Transparence et fiabilité</li>
    </ul>
    <a href="{{ route('home') }}" class="btn btn-primary">Retour à l’accueil</a>
</div>
@endsection