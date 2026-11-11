<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bonjour la classe</title>
        @vite('resources/css/hello.css')
    </head>
    <body>
        <main class="welcome">
            <h1>bonjour {{ $prenom }} {{ $nom }}</h1>
        </main>
    </body>
</html>