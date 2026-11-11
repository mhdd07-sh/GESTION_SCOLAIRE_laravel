<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bonjour la classe</title>
        @vite('resources/css/afficherEtudiant.css')
    </head>
    <body>
        <main class="welcome">
            <h1>Bonjour {{ $listeEtudiants[0]['nom'] }} {{ $listeEtudiants[0]['prenom'] }}</h1>
        </main>
    </body>
</html>