<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'étudiant</title>
    @vite(['resources/css/liste.css'])
</head>
<body>
    <div class="container" style="max-width: 500px;">
        <h1>Modifier l'Étudiant</h1>

        <form action="{{ route('updateEtudiant') }}" method="POST">
            @csrf
            <input type="hidden" name="ancien_email" value="{{ $etudiant['email'] }}">

            <label for="nom" style="display:block; margin-top:1rem;">Nom</label>
            <input type="text" id="nom" name="nom" value="{{ $etudiant['nom'] }}" required style="width:100%; padding:0.5rem; border:1px solid #dee2e6; border-radius:0.375rem;">

            <label for="prenom" style="display:block; margin-top:1rem;">Prénom</label>
            <input type="text" id="prenom" name="prenom" value="{{ $etudiant['prenom'] }}" required style="width:100%; padding:0.5rem; border:1px solid #dee2e6; border-radius:0.375rem;">

            <label for="email" style="display:block; margin-top:1rem;">E-mail</label>
            <input type="email" id="email" name="email" value="{{ $etudiant['email'] }}" required style="width:100%; padding:0.5rem; border:1px solid #dee2e6; border-radius:0.375rem;">

            <div style="margin-top: 1.5rem; display:flex; gap:1rem;">
                <button type="submit" class="btn-primary" style="margin-top:0;">Enregistrer</button>
                <a href="{{ route('afficherEtudiant') }}" class="btn-primary" style="background-color:#6c757d; margin-top:0;">Annuler</a>
            </div>
        </form>
    </div>
</body>
</html>