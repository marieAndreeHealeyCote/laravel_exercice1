<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- HEADER -->
    <header class="bg-primary text-white py-3 mb-4">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <h1 class="h3 mb-2 mb-md-0">MonSite</h1>
            <nav>
                <a href="{{ route('home') }}" class="text-white me-3 {{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
                <a href="{{ route('about') }}" class="text-white me-3 {{ request()->routeIs('about') ? 'active' : '' }}">À propos</a>
                <a href="{{ route('contact') }}" class="text-white {{ request()->routeIs('contact') || request()->routeIs('contact.send') ? 'active' : '' }}">Contact</a>
            </nav>
        </div>
    </header>

    <!-- CONTENU PRINCIPAL -->
    <main class="container flex-grow-1 mb-4">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        © {{ date('Y') }} MonSite - Tous droits réservés
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>