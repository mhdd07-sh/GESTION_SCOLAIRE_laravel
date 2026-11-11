@extends('_header_professor')

@section('title', 'Détails du professeur')

@section('content')

<div class="container mt-5">

    <h1 class="mb-4">Détails du professeur</h1>

    <div class="card">
        <div class="card-body">

            <h4 class="card-title">
                {{ $professor->nom }} {{ $professor->prenom }}
            </h4>

            <hr>

            <p>
                <strong>Nom :</strong>
                {{ $professor->nom }}
            </p>

            <p>
                <strong>Prénom :</strong>
                {{ $professor->prenom }}
            </p>

            <p>
                <strong>Email :</strong>
                {{ $professor->email }}
            </p>

            <p>
                <strong>Date de naissance :</strong>
                {{ \Carbon\Carbon::parse($professor->date_naissance)->format('d/m/Y') }}
            </p>

            <p>
                <strong>Profession :</strong>
                {{ $professor->profession }}
            </p>

            <a href="{{ route('professors.edit', $professor) }}"
               class="btn btn-warning">
                Modifier
            </a>

            <a href="{{ route('professors.index') }}"
               class="btn btn-secondary">
                Retour
            </a>

        </div>
    </div>

</div>

@endsection