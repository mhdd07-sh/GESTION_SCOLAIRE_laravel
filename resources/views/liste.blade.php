<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
    @vite(['resources/css/liste.css'])
</head>
<body>

    <div class="container">
        <h1>Liste des Étudiants Inscrits</h1>

        @if(count($liste) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>E-mail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($liste as $etudiant)
                        <tr>
                            <td>{{ $etudiant['prenom'] }}</td>
                            <td>{{ $etudiant['nom'] }}</td>
                            <td>{{ $etudiant['email'] }}</td>
                            <td style="text-align: center;"> <!-- Bouton de suppression -->
                                <div style="display: flex; gap: 0.5rem; justify-content: center;">
                                
                                    <a href="{{ route('editEtudiant', ['email' => $etudiant['email']]) }}" class="btn-warning">Modifier</a>

                                    <!-- Formulaire de suppression existant -->
                                    <form action="{{ route('deleteEtudiant') }}" method="POST" onsubmit="return confirm('Supprimer cet étudiant ?');" style="margin: 0;">
                                        @csrf
                                        <input type="hidden" name="email" value="{{ $etudiant['email'] }}">
                                        <button type="submit" class="btn-danger">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert-info">Aucun étudiant n'a encore été enregistré.</div>
        @endif

        <a href="{{ route('etudiant') }}" class="btn-primary">Ajouter un autre étudiant</a>
    </div>

</body>
</html>