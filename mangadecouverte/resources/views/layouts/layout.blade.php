<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" href="css/mangas.css">

        <title>
            @yield('titrePage')
        </title>
    </head>
    <body>
        <header>
            @yield('titreItem')
        </header>
        @yield('contenu')
        <footer class="footer">
            Manga - copyright 3AInfo - 2021
        </footer>
    </body>
</html>