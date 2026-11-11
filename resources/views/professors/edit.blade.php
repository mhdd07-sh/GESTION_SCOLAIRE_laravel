@extends('_header_professor')

@section('title', 'Modifier un professeur')

@section('content')

<div class="container mt-5">

    <h1 class="mb-4">Modifier un professeur</h1>

    <form action="{{ route('professors.update', $professor) }}"
          method="POST">

        @csrf
        @method('PUT')

        @include('professors._form')

    </form>

</div>

@endsection