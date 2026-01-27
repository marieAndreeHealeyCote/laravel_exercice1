@extends('master')

@section('title', 'Résultat du contact')

@section('content')
<div class="card mb-4 shadow-sm p-4">
    <h2>Données reçues</h2>
    <p><strong>Nom :</strong> {{ $name }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Message :</strong> {{ $message }}</p>
    <a href="{{ route('contact') }}" class="btn btn-primary">Retour</a>
</div>
@endsection('content')