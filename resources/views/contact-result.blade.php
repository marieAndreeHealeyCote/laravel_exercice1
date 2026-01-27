@extends('master')

@section('title', 'Résultat')

@section('content')
<section class="card">
    <h2>Données reçues</h2>

    <p><strong>Nom :</strong> {{ $name }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Message :</strong> {{ $message }}</p>

    <a href="{{ route('contact') }}" class="btn btn-primary">
        Retour
    </a>
</section>
@endsection