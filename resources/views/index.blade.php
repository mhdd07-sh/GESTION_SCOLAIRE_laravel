
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Accueil - Gestion scolaire</title>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #16324f;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }

        .hero {
            padding: 55px 20px 35px;
            text-align: center;
        }

        .hero h1 {
            color: #16324f;
            font-weight: bold;
        }

        .management-card {
            background: white;
            border: none;
            border-radius: 15px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.07);
            transition: transform 0.3s;
        }

        .management-card:hover {
            transform: translateY(-5px);
        }

        .card-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .student-icon {
            color: #3182ce;
        }

        .professor-icon {
            color: #198754;
        }

        .student-icon {
            color: #198754;
        }

        .management-card h3 {
            color: #16324f;
            font-weight: bold;
        }

        .management-card p {
            color: #6c757d;
        }

        .btn-student {
            background-color: #3182ce;
            color: white;
        }

        .btn-student:hover {
            background-color: #2465a0;
            color: white;
        }

        .btn-professor {
            background-color: #198754;
            color: white;
        }

        .btn-professor:hover {
            background-color: #146c43;
            color: white;
        }

        footer {
            margin-top: 70px;
            padding: 20px;
            background: #16324f;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <a class="navbar-brand" href="{{ route('home') }}">
                GESTION SCOLAIRE
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link text-white"
                           href="{{ route('home') }}">
                            Accueil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white"
                           href="{{ route('students.index') }}">
                            Étudiants
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white"
                           href="{{ route('professors.index') }}">
                            Professeurs
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>


    <!-- Présentation -->
    <section class="hero">

        <div class="container">

            <h1>Bienvenue dans votre espace de gestion scolaire</h1>

            <p class="lead text-secondary mt-3">
                Gérez facilement les informations des étudiants
                et des professeurs de votre établissement.
            </p>

        </div>

    </section>


    <!-- Les deux espaces de gestion -->
    <div class="container pb-5">

        <div class="row g-4">

            <!-- Gestion des étudiants -->
            <div class="col-md-6">

                <div class="management-card text-center">

                    <div class="card-icon student-icon">
                        🎓
                    </div>

                    <h3>Gestion des étudiants</h3>

                    <p>
                        Gérez les informations de vos étudiants :
                        nom, prénom, email et date de naissance.
                    </p>

                    <hr>

                    <div class="d-grid gap-3">

                        <a href="{{ route('students.index') }}"
                           class="btn btn-student">
                            <i class="bi bi-people"></i>
                            Voir la liste des étudiants
                        </a>

                        <a href="{{ route('students.create') }}"
                           class="btn btn-outline-primary">
                            + Ajouter un étudiant
                        </a>

                    </div>

                </div>

            </div>


            <!-- Gestion des professeurs -->
            <div class="col-md-6">

                <div class="management-card text-center">

                    <div class="card-icon professor-icon">
                        👨‍🏫
                    </div>

                    <h3>Gestion des professeurs</h3>

                    <p>
                        Gérez les informations de vos professeurs :
                        nom, prénom, email, date de naissance
                        et profession.
                    </p>

                    <hr>

                    <div class="d-grid gap-3">

                        <a href="{{ route('professors.index') }}"
                           class="btn btn-professor">
                            Voir la liste des professeurs
                        </a>

                        <a href="{{ route('professors.create') }}"
                           class="btn btn-outline-success">
                            + Ajouter un professeur
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Pied de page -->
    <footer>
        <p class="mb-0">
            © {{ date('Y') }} - Application de gestion scolaire.
            Tous droits réservés.
        </p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
