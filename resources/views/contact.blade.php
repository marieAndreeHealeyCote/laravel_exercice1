@extends('layouts.master')

@section('title', 'Contact')

@section('content')
<section class="card">
    <h2>Formulaire de contact</h2>

    <form method="POST" action="{{ route('contact.send') }}">
        @csrf

        <label>Nom</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Message</label>
        <textarea name="message" required></textarea>

        <button type="submit" class="btn btn-primary">
            Envoyer
        </button>
    </form>
</section>
@endsection