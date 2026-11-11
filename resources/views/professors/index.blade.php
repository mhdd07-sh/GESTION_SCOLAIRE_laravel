@extends('_header_professor')

@section('title', 'Liste des professeurs')

@section('content')

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Liste des professeurs</h1>

        <a href="{{ route('professors.create') }}"
           class="btn btn-primary">
            + Ajouter un professeur
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($professors->isEmpty())

        <div class="alert alert-info">
            Aucun professeur enregistré pour le moment.
        </div>

    @else

        <table class="table table-bordered table-striped">

            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Date de naissance</th>
                    <th>Profession</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @foreach($professors as $professor)

                    <tr>
                        <td>{{ $professor->id }}</td>
                        <td>{{ $professor->nom }}</td>
                        <td>{{ $professor->prenom }}</td>
                        <td>{{ $professor->email }}</td>

                        <td>
                            {{ \Carbon\Carbon::parse($professor->date_naissance)->format('d/m/Y') }}
                        </td>

                        <td>{{ $professor->profession }}</td>

                        <td>
                            <a href="{{ route('professors.show', $professor) }}"
                               class="btn btn-info btn-sm">
                                Voir
                            </a>

                            <a href="{{ route('professors.edit', $professor) }}"
                               class="btn btn-warning btn-sm">
                                Modifier
                            </a>

                            <form action="{{ route('professors.destroy', $professor) }}"
                                  method="POST"
                                  style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Voulez-vous vraiment supprimer ce professeur ?')">
                                    Supprimer
                                </button>

                            </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    @endif

</div>

@endsection