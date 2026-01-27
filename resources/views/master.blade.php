<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Exercice Laravel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- HEADER -->
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><strong>MonSite</strong></li>
                    <li>
                        <a href="{{ route('home') }}">Accueil</a>
                        <a href="{{ route('about') }}">À propos</a>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- CONTENU PRINCIPAL -->
    <main class="container">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer>
        <p>© {{ date('Y') }} MonSite — Tous droits réservés</p>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="{{asset('js/scripts.js')}}"></script>
    @yield('scripts')

</body>

</html>