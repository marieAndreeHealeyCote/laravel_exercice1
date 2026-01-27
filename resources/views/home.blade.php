@extends('master')

@section('title', 'Home')

@section('content')
<section class="card">
    <h1>Bienvenue sur la page d’accueil</h1>

    <p>
        Ceci est la page principale du projet Laravel que nous avons créé.
    </p>

    <a href="{{ route('contact') }}" class="btn btn-primary">
        Nous contacter
    </a>
</section>
@endsection('content')